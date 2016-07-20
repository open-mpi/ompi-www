<?
$subject_val = "Re: [hwloc-users] problem with X11 using Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 11:41:04 2014" -->
<!-- isoreceived="20140917154104" -->
<!-- sent="Wed, 17 Sep 2014 17:40:36 +0200 (CEST)" -->
<!-- isosent="20140917154036" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] problem with X11 using Solaris" -->
<!-- id="201409171540.s8HFea4j028903_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[hwloc-users] problem with X11 using Solaris" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-users] problem with X11 using Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-17 11:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1081.php">Aulwes, Rob: "[hwloc-users] more detailed errors"</a>
<li><strong>Previous message:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1082.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Can you send the output of configure, the generated config.log and your
</span><br>
<span class="quotelev1">&gt; unmodified Xutil.h? My solaris/openindiana doesn't have that problem.
</span><br>
<p>Yes, I have used the following commands to build a working &quot;lstopo&quot;
<br>
with graphics output.
<br>
<p>cd /usr/include/X11/
<br>
cp -p Xutil.h.modified Xutil.h
<br>
cd /export2/src/openmpi-1.9
<br>
<p>mkdir hwloc-1.9.1-${SYSTEM_ENV}.${MACHINE_ENV}
<br>
cd hwloc-1.9.1-${SYSTEM_ENV}.${MACHINE_ENV}
<br>
<p>../hwloc-1.9.1/configure --prefix=/usr/local/hwloc-1.9.1\
<br>
&nbsp;&nbsp;CC=cc CXX=CC \
<br>
&nbsp;&nbsp;CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;--disable-libxml2 --disable-picky --with-x \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
<br>
<p>make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV
<br>
make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV
<br>
make check |&amp; tee log.make-check.$SYSTEM_ENV.$MACHINE_ENV
<br>
<p>cd /usr/include/X11/
<br>
cp -p Xutil.h.orig Xutil.h
<br>
cd /export2/src/openmpi-1.9
<br>
<p><p>I get the following files and output with an unmodified Xutil.h.
<br>
<p>tyr fd1026 108 dir /usr/local/hwloc-1.9.1/bin/
<br>
total 856
<br>
drwxr-xr-x 2 root root    512 Sep 17 17:09 .
<br>
drwxr-xr-x 6 root root    512 Sep 17 17:09 ..
<br>
-rwxr-xr-x 1 root root  38688 Sep 17 17:09 hwloc-annotate
<br>
-rwxr-xr-x 1 root root  25928 Sep 17 17:09 hwloc-assembler
<br>
-rwxr-xr-x 1 root root   2376 Sep 17 17:09 hwloc-assembler-remote
<br>
-rwxr-xr-x 1 root root  48708 Sep 17 17:09 hwloc-bind
<br>
-rwxr-xr-x 1 root root  49748 Sep 17 17:09 hwloc-calc
<br>
-rwxr-xr-x 1 root root   4131 Sep 17 17:09 hwloc-compress-dir
<br>
-rwxr-xr-x 1 root root  26692 Sep 17 17:09 hwloc-diff
<br>
-rwxr-xr-x 1 root root  32528 Sep 17 17:09 hwloc-distances
<br>
-rwxr-xr-x 1 root root  35188 Sep 17 17:09 hwloc-distrib
<br>
-rwxr-xr-x 1 root root  49972 Sep 17 17:09 hwloc-info
<br>
lrwxrwxrwx 1 root root     18 Sep 17 17:09 hwloc-ls -&gt; lstopo-no-graphics
<br>
-rwxr-xr-x 1 root root  26792 Sep 17 17:09 hwloc-patch
<br>
-rwxr-xr-x 1 root root  34380 Sep 17 17:09 hwloc-ps
<br>
-rwxr-xr-x 1 root root 244468 Sep 17 17:09 lstopo
<br>
-rwxr-xr-x 1 root root 225288 Sep 17 17:09 lstopo-no-graphics
<br>
tyr fd1026 109 lstopo
<br>
Machine (4096MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#2 2048MB) + Socket L#0 + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 2048MB) + Socket L#1 + Core L#1 + PU L#1 (P#1)
<br>
tyr fd1026 110 su -
<br>
Password: 
<br>
Sun Microsystems Inc.   SunOS 5.10      Generic January 2005
<br>
# cd /usr/local
<br>
# mv hwloc-1.9.1 hwloc-1.9.1_unmodified-Xutil.h
<br>
# exit
<br>
tyr fd1026 111 dir /usr/local/hwloc-1.9.1/bin/
<br>
total 864
<br>
drwxr-xr-x 2 root root    512 Sep 17 17:21 .
<br>
drwxr-xr-x 6 root root    512 Sep 17 17:21 ..
<br>
-rwxr-xr-x 1 root root  38688 Sep 17 17:21 hwloc-annotate
<br>
-rwxr-xr-x 1 root root  25928 Sep 17 17:21 hwloc-assembler
<br>
-rwxr-xr-x 1 root root   2376 Sep 17 17:21 hwloc-assembler-remote
<br>
-rwxr-xr-x 1 root root  48708 Sep 17 17:21 hwloc-bind
<br>
-rwxr-xr-x 1 root root  49748 Sep 17 17:21 hwloc-calc
<br>
-rwxr-xr-x 1 root root   4131 Sep 17 17:21 hwloc-compress-dir
<br>
-rwxr-xr-x 1 root root  26692 Sep 17 17:21 hwloc-diff
<br>
-rwxr-xr-x 1 root root  32528 Sep 17 17:21 hwloc-distances
<br>
-rwxr-xr-x 1 root root  35188 Sep 17 17:21 hwloc-distrib
<br>
-rwxr-xr-x 1 root root  49972 Sep 17 17:21 hwloc-info
<br>
lrwxrwxrwx 1 root root     18 Sep 17 17:21 hwloc-ls -&gt; lstopo-no-graphics
<br>
-rwxr-xr-x 1 root root  26792 Sep 17 17:21 hwloc-patch
<br>
-rwxr-xr-x 1 root root  34380 Sep 17 17:21 hwloc-ps
<br>
-rwxr-xr-x 1 root root 250116 Sep 17 17:21 lstopo
<br>
-rwxr-xr-x 1 root root 225288 Sep 17 17:21 lstopo-no-graphics
<br>
tyr local 112 lstopo
<br>
X connection to localhost:13.0 broken (explicit kill or server shutdown).
<br>
tyr local 113 
<br>
<p>The error message came up, when I closed the lstopo window.
<br>
<p><p><p><p><span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 16/09/2014 14:43, Siegmar Gross a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; today I installed hwloc-1.9.1 on my machines (Solaris 10 Sparc (tyr),
</span><br>
<span class="quotelev2">&gt; &gt; Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1 x86_64 (linpc1))
</span><br>
<span class="quotelev2">&gt; &gt; with Sun C 5.12. I could use &quot;--with-x&quot; on Solaris after modifying
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/X11/Xutil.h.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 111 more /usr/include/X11/Xutil.h
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; /* You must include &lt;X11/Xlib.h&gt; before including this file */
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.9 112 more /usr/include/X11/Xutil.h.modified 
</span><br>
<span class="quotelev2">&gt; &gt; /* $TOG: Xutil.h /main/45 1998/02/06 18:03:35 kaleb $ */
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; #ifndef _XLIB_H_
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;X11/Xlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifndef _XUTIL_H_
</span><br>
<span class="quotelev2">&gt; &gt; #define _XUTIL_H_
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful, if somebody can fix this problem in the source
</span><br>
<span class="quotelev2">&gt; &gt; code (especially &quot;configure&quot;), so that I don't have to modify system
</span><br>
<span class="quotelev2">&gt; &gt; header files.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have attached some log files, which show warnings (make) and errors
</span><br>
<span class="quotelev2">&gt; &gt; (make check). I used the following configure command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../hwloc-1.9.1/configure --prefix=/usr/local/hwloc-1.9.1\
</span><br>
<span class="quotelev2">&gt; &gt;   CC=cc CXX=CC \
</span><br>
<span class="quotelev2">&gt; &gt;   CFLAGS=&quot;&quot; CXXFLAGS=&quot;&quot; FFLAGS=&quot;&quot; FCFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;   --disable-libxml2 --disable-picky --with-x \
</span><br>
<span class="quotelev2">&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1079.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1079.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<p>

<br><p>
/* $TOG: Xutil.h /main/45 1998/02/06 18:03:35 kaleb $ */
<br>
<p>/***********************************************************
<br>
<p>Copyright 1987, 1998  The Open Group
<br>
<p>All Rights Reserved.
<br>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy
<br>
of this software and associated documentation files (the &quot;Software&quot;), to deal
<br>
in the Software without restriction, including without limitation the rights
<br>
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
<br>
copies of the Software, and to permit persons to whom the Software is
<br>
furnished to do so, subject to the following conditions:
<br>
<p>The above copyright notice and this permission notice shall be included in
<br>
all copies or substantial portions of the Software.
<br>
<p>THE SOFTWARE IS PROVIDED &quot;AS IS&quot;, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
<br>
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
<br>
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.  IN NO EVENT SHALL THE
<br>
OPEN GROUP BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
<br>
AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
<br>
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<br>
<p>Except as contained in this notice, the name of The Open Group shall not be
<br>
used in advertising or otherwise to promote the sale, use or other dealings
<br>
in this Software without prior written authorization from The Open Group.
<br>
<p><p>Copyright 1987 by Digital Equipment Corporation, Maynard, Massachusetts.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved
<br>
<p>Permission to use, copy, modify, and distribute this software and its 
<br>
documentation for any purpose and without fee is hereby granted, 
<br>
provided that the above copyright notice appear in all copies and that
<br>
both that copyright notice and this permission notice appear in 
<br>
supporting documentation, and that the name of Digital not be
<br>
used in advertising or publicity pertaining to distribution of the
<br>
software without specific, written prior permission.  
<br>
<p>DIGITAL DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE, INCLUDING
<br>
ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS, IN NO EVENT SHALL
<br>
DIGITAL BE LIABLE FOR ANY SPECIAL, INDIRECT OR CONSEQUENTIAL DAMAGES OR
<br>
ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS,
<br>
WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION,
<br>
ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS
<br>
SOFTWARE.
<br>
<p>******************************************************************/
<br>
#ifndef _XLIB_H_
<br>
#include &lt;X11/Xlib.h&gt;
<br>
#endif
<br>
<p>#ifndef _XUTIL_H_
<br>
#define _XUTIL_H_
<br>
<p>#pragma ident &quot;@(#)Xutil.h	1.5	06/12/14 SMI&quot;
<br>
<p>/* You must include &lt;X11/Xlib.h&gt; before including this file */
<br>
<p>/* 
<br>
&nbsp;* Bitmask returned by XParseGeometry().  Each bit tells if the corresponding
<br>
&nbsp;* value (x, y, width, height) was found in the parsed string.
<br>
&nbsp;*/
<br>
#define NoValue		0x0000
<br>
#define XValue  	0x0001
<br>
#define YValue		0x0002
<br>
#define WidthValue  	0x0004
<br>
#define HeightValue  	0x0008
<br>
#define AllValues 	0x000F
<br>
#define XNegative 	0x0010
<br>
#define YNegative 	0x0020
<br>
<p>/*
<br>
&nbsp;* new version containing base_width, base_height, and win_gravity fields;
<br>
&nbsp;* used with WM_NORMAL_HINTS.
<br>
&nbsp;*/
<br>
typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long flags;	/* marks which fields in this structure are defined */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x, y;		/* obsolete for new window mgrs, but clients */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int width, height;	/* should set so old wm's don't mess up */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int min_width, min_height;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int max_width, max_height;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int width_inc, height_inc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x;	/* numerator */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int y;	/* denominator */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} min_aspect, max_aspect;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int base_width, base_height;		/* added by ICCCM version 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int win_gravity;			/* added by ICCCM version 1 */
<br>
} XSizeHints;
<br>
<p>/*
<br>
&nbsp;* The next block of definitions are for window manager properties that
<br>
&nbsp;* clients and applications use for communication.
<br>
&nbsp;*/
<br>
<p>/* flags argument in size hints */
<br>
#define USPosition	(1L &lt;&lt; 0) /* user specified x, y */
<br>
#define USSize		(1L &lt;&lt; 1) /* user specified width, height */
<br>
<p>#define PPosition	(1L &lt;&lt; 2) /* program specified position */
<br>
#define PSize		(1L &lt;&lt; 3) /* program specified size */
<br>
#define PMinSize	(1L &lt;&lt; 4) /* program specified minimum size */
<br>
#define PMaxSize	(1L &lt;&lt; 5) /* program specified maximum size */
<br>
#define PResizeInc	(1L &lt;&lt; 6) /* program specified resize increments */
<br>
#define PAspect		(1L &lt;&lt; 7) /* program specified min and max aspect ratios */
<br>
#define PBaseSize	(1L &lt;&lt; 8) /* program specified base for incrementing */
<br>
#define PWinGravity	(1L &lt;&lt; 9) /* program specified window gravity */
<br>
<p>/* obsolete */
<br>
#define PAllHints (PPosition|PSize|PMinSize|PMaxSize|PResizeInc|PAspect)
<br>
<p><p><p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long flags;	/* marks which fields in this structure are defined */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bool input;	/* does this application rely on the window manager to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;get keyboard input? */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int initial_state;	/* see below */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pixmap icon_pixmap;	/* pixmap to be used as icon */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Window icon_window; 	/* window to be used as icon */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int icon_x, icon_y; 	/* initial position of icon */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pixmap icon_mask;	/* icon mask bitmap */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XID window_group;	/* id of related window group */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* this structure may be extended in the future */
<br>
} XWMHints;
<br>
<p>/* definition for flags of XWMHints */
<br>
<p>#define InputHint 		(1L &lt;&lt; 0)
<br>
#define StateHint 		(1L &lt;&lt; 1)
<br>
#define IconPixmapHint		(1L &lt;&lt; 2)
<br>
#define IconWindowHint		(1L &lt;&lt; 3)
<br>
#define IconPositionHint 	(1L &lt;&lt; 4)
<br>
#define IconMaskHint		(1L &lt;&lt; 5)
<br>
#define WindowGroupHint		(1L &lt;&lt; 6)
<br>
#define AllHints (InputHint|StateHint|IconPixmapHint|IconWindowHint| \
<br>
IconPositionHint|IconMaskHint|WindowGroupHint)
<br>
#define XUrgencyHint		(1L &lt;&lt; 8)
<br>
<p>/* definitions for initial window state */
<br>
#define WithdrawnState 0	/* for windows that are not mapped */
<br>
#define NormalState 1	/* most applications want to start this way */
<br>
#define IconicState 3	/* application wants to start as an icon */
<br>
<p>/*
<br>
&nbsp;* Obsolete states no longer defined by ICCCM
<br>
&nbsp;*/
<br>
#define DontCareState 0	/* don't know or care */
<br>
#define ZoomState 2	/* application wants to start zoomed */
<br>
#define InactiveState 4	/* application believes it is seldom used; */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* some wm's may put it on inactive menu */
<br>
<p><p>/*
<br>
&nbsp;* new structure for manipulating TEXT properties; used with WM_NAME, 
<br>
&nbsp;* WM_ICON_NAME, WM_CLIENT_MACHINE, and WM_COMMAND.
<br>
&nbsp;*/
<br>
typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned char *value;		/* same as Property routines */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom encoding;			/* prop type */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int format;				/* prop data format: 8, 16, or 32 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long nitems;		/* number of data items in value */
<br>
} XTextProperty;
<br>
<p>#define XNoMemory -1
<br>
#define XLocaleNotSupported -2
<br>
#define XConverterNotFound -3
<br>
<p>typedef enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XStringStyle,		/* STRING */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XCompoundTextStyle,		/* COMPOUND_TEXT */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextStyle,			/* text in owner's encoding (current locale)*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XStdICCTextStyle,		/* STRING, else COMPOUND_TEXT */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XUTF8StringStyle            /* UTF8_STRING */
<br>
} XICCEncodingStyle;
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int min_width, min_height;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int max_width, max_height;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int width_inc, height_inc;
<br>
} XIconSize;
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *res_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *res_class;
<br>
} XClassHint;
<br>
<p>#ifdef XUTIL_DEFINE_FUNCTIONS
<br>
extern int XDestroyImage(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XImage *ximage);
<br>
extern unsigned long XGetPixel(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XImage *ximage,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x, int y);
<br>
extern int XPutPixel(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XImage *ximage,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x, int y,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long pixel);
<br>
extern XImage *XSubImage(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XImage *ximage,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x, int y,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned int width, unsigned int height);
<br>
extern int XAddPixel(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XImage *ximage,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long value);
<br>
#else
<br>
/*
<br>
&nbsp;* These macros are used to give some sugar to the image routines so that
<br>
&nbsp;* naive people are more comfortable with them.
<br>
&nbsp;*/
<br>
#define XDestroyImage(ximage) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((*((ximage)-&gt;f.destroy_image))((ximage)))
<br>
#define XGetPixel(ximage, x, y) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((*((ximage)-&gt;f.get_pixel))((ximage), (x), (y)))
<br>
#define XPutPixel(ximage, x, y, pixel) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((*((ximage)-&gt;f.put_pixel))((ximage), (x), (y), (pixel)))
<br>
#define XSubImage(ximage, x, y, width, height)  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((*((ximage)-&gt;f.sub_image))((ximage), (x), (y), (width), (height)))
<br>
#define XAddPixel(ximage, value) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((*((ximage)-&gt;f.add_pixel))((ximage), (value)))
<br>
#endif
<br>
<p>/*
<br>
&nbsp;* Compose sequence status structure, used in calling XLookupString.
<br>
&nbsp;*/
<br>
typedef struct _XComposeStatus {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XPointer compose_ptr;	/* state table pointer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int chars_matched;		/* match state */
<br>
} XComposeStatus;
<br>
<p>/*
<br>
&nbsp;* Keysym macros, used on Keysyms to test for classes of symbols
<br>
&nbsp;*/
<br>
#define IsKeypadKey(keysym) \
<br>
&nbsp;&nbsp;(((KeySym)(keysym) &gt;= XK_KP_Space) &amp;&amp; ((KeySym)(keysym) &lt;= XK_KP_Equal))
<br>
<p>#define IsPrivateKeypadKey(keysym) \
<br>
&nbsp;&nbsp;(((KeySym)(keysym) &gt;= 0x11000000) &amp;&amp; ((KeySym)(keysym) &lt;= 0x1100FFFF))
<br>
<p>#define IsCursorKey(keysym) \
<br>
&nbsp;&nbsp;(((KeySym)(keysym) &gt;= XK_Home)     &amp;&amp; ((KeySym)(keysym) &lt;  XK_Select))
<br>
<p>#define IsPFKey(keysym) \
<br>
&nbsp;&nbsp;(((KeySym)(keysym) &gt;= XK_KP_F1)     &amp;&amp; ((KeySym)(keysym) &lt;= XK_KP_F4))
<br>
<p>#define IsFunctionKey(keysym) \
<br>
&nbsp;&nbsp;(((KeySym)(keysym) &gt;= XK_F1)       &amp;&amp; ((KeySym)(keysym) &lt;= XK_F35))
<br>
<p>#define IsMiscFunctionKey(keysym) \
<br>
&nbsp;&nbsp;(((KeySym)(keysym) &gt;= XK_Select)   &amp;&amp; ((KeySym)(keysym) &lt;= XK_Break))
<br>
<p>#ifdef XK_XKB_KEYS
<br>
#define IsModifierKey(keysym) \
<br>
&nbsp;&nbsp;((((KeySym)(keysym) &gt;= XK_Shift_L) &amp;&amp; ((KeySym)(keysym) &lt;= XK_Hyper_R)) \
<br>
&nbsp;&nbsp;&nbsp;|| (((KeySym)(keysym) &gt;= XK_ISO_Lock) &amp;&amp; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((KeySym)(keysym) &lt;= XK_ISO_Last_Group_Lock)) \
<br>
&nbsp;&nbsp;&nbsp;|| ((KeySym)(keysym) == XK_Mode_switch) \
<br>
&nbsp;&nbsp;&nbsp;|| ((KeySym)(keysym) == XK_Num_Lock))
<br>
#else
<br>
#define IsModifierKey(keysym) \
<br>
&nbsp;&nbsp;((((KeySym)(keysym) &gt;= XK_Shift_L) &amp;&amp; ((KeySym)(keysym) &lt;= XK_Hyper_R)) \
<br>
&nbsp;&nbsp;&nbsp;|| ((KeySym)(keysym) == XK_Mode_switch) \
<br>
&nbsp;&nbsp;&nbsp;|| ((KeySym)(keysym) == XK_Num_Lock))
<br>
#endif
<br>
/*
<br>
&nbsp;* opaque reference to Region data type 
<br>
&nbsp;*/
<br>
typedef struct _XRegion *Region; 
<br>
<p>/* Return values from XRectInRegion() */
<br>
&nbsp;
<br>
#define RectangleOut 0
<br>
#define RectangleIn  1
<br>
#define RectanglePart 2
<br>
&nbsp;
<br>
<p>/*
<br>
&nbsp;* Information used by the visual utility routines to find desired visual
<br>
&nbsp;* type from the many visuals a display may support.
<br>
&nbsp;*/
<br>
<p>typedef struct {
<br>
&nbsp;&nbsp;Visual *visual;
<br>
&nbsp;&nbsp;VisualID visualid;
<br>
&nbsp;&nbsp;int screen;
<br>
&nbsp;&nbsp;int depth;
<br>
#if defined(__cplusplus) || defined(c_plusplus)
<br>
&nbsp;&nbsp;int c_class;					/* C++ */
<br>
#else
<br>
&nbsp;&nbsp;int class;
<br>
#endif
<br>
&nbsp;&nbsp;unsigned long red_mask;
<br>
&nbsp;&nbsp;unsigned long green_mask;
<br>
&nbsp;&nbsp;unsigned long blue_mask;
<br>
&nbsp;&nbsp;int colormap_size;
<br>
&nbsp;&nbsp;int bits_per_rgb;
<br>
} XVisualInfo;
<br>
<p>#define VisualNoMask		0x0
<br>
#define VisualIDMask 		0x1
<br>
#define VisualScreenMask	0x2
<br>
#define VisualDepthMask		0x4
<br>
#define VisualClassMask		0x8
<br>
#define VisualRedMaskMask	0x10
<br>
#define VisualGreenMaskMask	0x20
<br>
#define VisualBlueMaskMask	0x40
<br>
#define VisualColormapSizeMask	0x80
<br>
#define VisualBitsPerRGBMask	0x100
<br>
#define VisualAllMask		0x1FF
<br>
<p>/*
<br>
&nbsp;* This defines a window manager property that clients may use to
<br>
&nbsp;* share standard color maps of type RGB_COLOR_MAP:
<br>
&nbsp;*/
<br>
typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colormap colormap;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long red_max;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long red_mult;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long green_max;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long green_mult;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long blue_max;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long blue_mult;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long base_pixel;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VisualID visualid;		/* added by ICCCM version 1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XID killid;			/* added by ICCCM version 1 */
<br>
} XStandardColormap;
<br>
<p>#define ReleaseByFreeingColormap ((XID) 1L)  /* for killid field above */
<br>
<p><p>/*
<br>
&nbsp;* return codes for XReadBitmapFile and XWriteBitmapFile
<br>
&nbsp;*/
<br>
#define BitmapSuccess		0
<br>
#define BitmapOpenFailed 	1
<br>
#define BitmapFileInvalid 	2
<br>
#define BitmapNoMemory		3
<br>
<p>/****************************************************************
<br>
&nbsp;*
<br>
&nbsp;* Context Management
<br>
&nbsp;*
<br>
&nbsp;****************************************************************/
<br>
<p><p>/* Associative lookup table return codes */
<br>
<p>#define XCSUCCESS 0	/* No error. */
<br>
#define XCNOMEM   1    /* Out of memory */
<br>
#define XCNOENT   2    /* No entry in table */
<br>
<p>typedef int XContext;
<br>
<p>#define XUniqueContext()       ((XContext) XrmUniqueQuark())
<br>
#define XStringToContext(string)   ((XContext) XrmStringToQuark(string))
<br>
<p>_XFUNCPROTOBEGIN
<br>
<p>/* The following declarations are alphabetized. */
<br>
<p>extern XClassHint *XAllocClassHint (
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern XIconSize *XAllocIconSize (
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern XSizeHints *XAllocSizeHints (
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern XStandardColormap *XAllocStandardColormap (
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern XWMHints *XAllocWMHints (
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern int XClipBox(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XRectangle*		/* rect_return */
<br>
#endif
<br>
);
<br>
<p>extern Region XCreateRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern char *XDefaultString(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void
<br>
#endif
<br>
);
<br>
<p>extern int XDeleteContext(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XID			/* rid */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XContext		/* context */
<br>
#endif
<br>
);
<br>
<p>extern int XDestroyRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */
<br>
#endif
<br>
);
<br>
<p>extern int XEmptyRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */
<br>
#endif
<br>
);
<br>
<p>extern int XEqualRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r1 */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r2 */
<br>
#endif
<br>
);
<br>
<p>extern int XFindContext(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XID			/* rid */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XContext		/* context */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XPointer*		/* data_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetClassHint(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XClassHint*		/* class_hints_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetIconSizes(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XIconSize**		/* size_list_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* count_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetNormalHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetRGBColormaps(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XStandardColormap** /* stdcmap_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* count_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetSizeHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetStandardColormap(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XStandardColormap*	/* colormap_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */			    
<br>
#endif
<br>
);
<br>
<p>extern Status XGetTextProperty(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* window */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern XVisualInfo *XGetVisualInfo(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long		/* vinfo_mask */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XVisualInfo*	/* vinfo_template */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* nitems_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetWMClientMachine(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */
<br>
#endif
<br>
);
<br>
<p>extern XWMHints *XGetWMHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */		      
<br>
#endif
<br>
);
<br>
<p>extern Status XGetWMIconName(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetWMName(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetWMNormalHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long*		/* supplied_return */ 
<br>
#endif
<br>
);
<br>
<p>extern Status XGetWMSizeHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long*		/* supplied_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern Status XGetZoomHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* zhints_return */
<br>
#endif
<br>
);
<br>
<p>extern int XIntersectRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* sra */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* srb */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* dr_return */
<br>
#endif
<br>
);
<br>
<p>extern void XConvertCase(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;KeySym		/* sym */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;KeySym*		/* lower */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;KeySym*		/* upper */
<br>
#endif
<br>
);
<br>
<p>extern int XLookupString(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XKeyEvent*		/* event_struct */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char*		/* buffer_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* bytes_buffer */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;KeySym*		/* keysym_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XComposeStatus*	/* status_in_out */
<br>
#endif
<br>
);
<br>
<p>extern Status XMatchVisualInfo(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* screen */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* depth */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* class */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XVisualInfo*	/* vinfo_return */
<br>
#endif
<br>
);
<br>
<p>extern int XOffsetRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* dx */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* dy */
<br>
#endif
<br>
);
<br>
<p>extern Bool XPointInRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* x */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* y */
<br>
#endif
<br>
);
<br>
<p>extern Region XPolygonRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XPoint*		/* points */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* n */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* fill_rule */
<br>
#endif
<br>
);
<br>
<p>extern int XRectInRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* x */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* y */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned int	/* width */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned int	/* height */
<br>
#endif
<br>
);
<br>
<p>extern int XSaveContext(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XID			/* rid */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XContext		/* context */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* data */
<br>
#endif
<br>
);
<br>
<p>extern int XSetClassHint(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XClassHint*		/* class_hints */
<br>
#endif
<br>
);
<br>
<p>extern int XSetIconSizes(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XIconSize*		/* size_list */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* count */    
<br>
#endif
<br>
);
<br>
<p>extern int XSetNormalHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints */
<br>
#endif
<br>
);
<br>
<p>extern void XSetRGBColormaps(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XStandardColormap*	/* stdcmaps */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* count */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern int XSetSizeHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern int XSetStandardProperties(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* window_name */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* icon_name */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pixmap		/* icon_pixmap */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char**		/* argv */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* argc */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints */
<br>
#endif
<br>
);
<br>
<p>extern void XSetTextProperty(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern void XSetWMClientMachine(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */
<br>
#endif
<br>
);
<br>
<p>extern int XSetWMHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XWMHints*		/* wm_hints */
<br>
#endif
<br>
);
<br>
<p>extern void XSetWMIconName(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */
<br>
#endif
<br>
);
<br>
<p>extern void XSetWMName(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */
<br>
#endif
<br>
);
<br>
<p>extern void XSetWMNormalHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints */
<br>
#endif
<br>
);
<br>
<p>extern void XSetWMProperties(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* window_name */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* icon_name */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char**		/* argv */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* argc */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* normal_hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XWMHints*		/* wm_hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XClassHint*		/* class_hints */
<br>
#endif
<br>
);
<br>
<p>extern void XmbSetWMProperties(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* window_name */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* icon_name */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char**		/* argv */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* argc */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* normal_hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XWMHints*		/* wm_hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XClassHint*		/* class_hints */
<br>
#endif
<br>
);
<br>
<p>extern void XSetWMSizeHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern int XSetRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;GC			/* gc */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */
<br>
#endif
<br>
);
<br>
<p>extern void XSetStandardColormap(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XStandardColormap*	/* colormap */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Atom		/* property */
<br>
#endif
<br>
);
<br>
<p>extern int XSetZoomHints(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Window		/* w */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* zhints */
<br>
#endif
<br>
);
<br>
<p>extern int XShrinkRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* r */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* dx */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* dy */
<br>
#endif
<br>
);
<br>
<p>extern Status XStringListToTextProperty(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char**		/* list */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* count */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */
<br>
#endif
<br>
);
<br>
<p>extern int XSubtractRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* sra */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* srb */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* dr_return */
<br>
#endif
<br>
);
<br>
<p>extern int XmbTextListToTextProperty(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char**		/* list */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* count */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XICCEncodingStyle	/* style */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */
<br>
#endif
<br>
);
<br>
<p>extern int XwcTextListToTextProperty(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wchar_t**		/* list */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* count */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XICCEncodingStyle	/* style */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop_return */
<br>
#endif
<br>
);
<br>
<p>extern void XwcFreeStringList(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wchar_t**		/* list */
<br>
#endif
<br>
);
<br>
<p>extern Status XTextPropertyToStringList(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char***		/* list_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* count_return */
<br>
#endif
<br>
);
<br>
<p>extern int XmbTextPropertyToTextList(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char***		/* list_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* count_return */
<br>
#endif
<br>
);
<br>
<p>extern int XwcTextPropertyToTextList(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XTextProperty*	/* text_prop */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wchar_t***		/* list_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* count_return */
<br>
#endif
<br>
);
<br>
<p>extern int XUnionRectWithRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XRectangle*		/* rectangle */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* src_region */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* dest_region_return */
<br>
#endif
<br>
);
<br>
<p>extern int XUnionRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* sra */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* srb */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* dr_return */
<br>
#endif
<br>
);
<br>
<p>extern int XWMGeometry(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Display*		/* display */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int			/* screen_number */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* user_geometry */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_Xconst char*	/* default_geometry */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned int	/* border_width */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XSizeHints*		/* hints */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* x_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* y_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* width_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* height_return */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int*		/* gravity_return */
<br>
#endif
<br>
);
<br>
<p>extern int XXorRegion(
<br>
#if NeedFunctionPrototypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* sra */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* srb */,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Region		/* dr_return */
<br>
#endif
<br>
);
<br>
<p>_XFUNCPROTOEND
<br>
<p>#endif /* _XUTIL_H_ */
<br>
<p><hr>
<ul>
<li>TEXT/x-sun-h-file attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1080/Xutil.h">Xutil.h</a>
</ul>
<!-- attachment="Xutil.h" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1081.php">Aulwes, Rob: "[hwloc-users] more detailed errors"</a>
<li><strong>Previous message:</strong> <a href="1079.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1082.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
