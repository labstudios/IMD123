﻿package com  {	import flash.display.MovieClip;	import flash.events.Event;		public class Ball extends MovieClip 	{		private static const LEFT_WALL:Number = 0;		private static const TOP_WALL:Number = 0;		private static const RIGHT_WALL:Number = 550;		private static const BOTTOM_WALL:Number = 400;		private static var balls:Vector.<Ball> = new Vector.<Ball>();		private var speed:Number = 4;		public function Ball():void 		{			this.rotation = Math.random()*360;			this.addEventListener(Event.ENTER_FRAME, run);			balls.push(this);		}				public function run(e:* = null)		{			this.x += Math.cos(this.rotation * Math.PI / 180) * this.speed;			this.y += Math.sin(this.rotation * Math.PI / 180) * this.speed;						if(this.x < LEFT_WALL || this.x > RIGHT_WALL)			{				this.rotation += 180;				this.speed += .1;			}			if(this.y < TOP_WALL || this.y > BOTTOM_WALL)			{				this.rotation += 180;				this.speed += .1;			}			for(var i:int = 0; i < balls.length;++i)			{				if(this != balls[i] && this.hitTestObject(balls[i]))				{					this.rotation += 90;					this.speed += .1;				}			}		}	}	}