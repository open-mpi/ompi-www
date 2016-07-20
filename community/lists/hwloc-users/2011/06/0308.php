<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 18:44:25 2011" -->
<!-- isoreceived="20110620224425" -->
<!-- sent="Mon, 20 Jun 2011 15:44:09 -0700" -->
<!-- isosent="20110620224409" -->
<!-- name="Carl Smith" -->
<!-- email="cs_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="23283.1308609849_at_kanawha.pbspro.com" -->
<!-- inreplyto="samuel.thibault_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc 1.2 compilation problems<br>
<strong>From:</strong> Carl Smith (<em>cs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-20 18:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; But then we'd use curses instead of ncurses on all systems and never
</span><br>
<span class="quotelev1">&gt; use ncurses, which is a regression.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm just pointing out what worked for us.  Since the right approach
<br>
for all might unfortunately necessitate ugly platform-groveling code to
<br>
correctly select the working combinations, I thought it prudent to leave
<br>
such code to the developers.  For more detail on the necessary groveling,
<br>
see below.
<br>
<p><span class="quotelev1">&gt; There must be a way to make the ncurses.h+libncurses combination work,
</span><br>
<span class="quotelev1">&gt; else AIX wouldn't ship them.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One might think so, and perhaps it's true.  However, it's there
<br>
because it's freeware,
<br>
<p><p>$ ls -l /usr/include/ncurses* /usr/lib/libncurses.a 
<br>
lrwxrwxrwx    1 root     system           34 Jan 28 2008  /usr/include/ncurses -&gt; ../../opt/freeware/include/ncurses
<br>
lrwxrwxrwx    1 root     system           36 Jan 28 2008  /usr/include/ncurses.h -&gt; ../../opt/freeware/include/ncurses.h
<br>
lrwxrwxrwx    1 root     system           35 Jan 28 2008  /usr/lib/libncurses.a -&gt; ../../opt/freeware/lib/libncurses.a
<br>
<p><p>not because there's any reason to think IBM believes it will work.  :-(
<br>
They are not a part of any installed filesets whereas the curses versions
<br>
are:
<br>
<p><p>$ lslpp -w &quot;*ncurses*&quot;
<br>
$ lslpp -w &quot;*curses*&quot;
<br>
&nbsp;&nbsp;File                                        Fileset               Type
<br>
&nbsp;&nbsp;----------------------------------------------------------------------------
<br>
&nbsp;&nbsp;/usr/ccs/lib/libxcurses.a                   bos.rte.libcur        File
<br>
&nbsp;&nbsp;/usr/lib/libcurses.a                        bos.rte.libcur        Symlink
<br>
&nbsp;&nbsp;/usr/lib/libxcurses.a                       bos.rte.libcur        Symlink
<br>
&nbsp;&nbsp;/usr/ccs/lib/libcurses.a                    bos.rte.libcur        Symlink
<br>
&nbsp;&nbsp;/usr/lib/nls/msg/en_US/libcurses.cat        bos.msg.en_US.rte     File
<br>
&nbsp;&nbsp;/usr/include/curses.h                       bos.adt.include       File
<br>
<p><p>and in /usr/include, only curses.h includes the problematic term.h (which
<br>
contains the cur_(bools|nums|strs) references unresolved by libncurses).
<br>
Seems like it's lstopo-text.c's assumption that /usr/include/term.h is
<br>
appropriate to include with ncurses support that's causing the cross-pollution.
<br>
Looking further, I saw a bunch of ncurses changes attributable to tparm and it
<br>
looks like that's why ncurses normally also supplies an option to install
<br>
some header files whose content has been adjusted for ncurses in a separate
<br>
directory (/usr/include/ncurses/ in this machine's case) - see the ncurses
<br>
--disable-overwrite configuration option.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc didn't adjust the include path if ncurses was found, so I
<br>
tried a simple experiment without my last suggested change but a different
<br>
include path,
<br>
<p><p>$ ./autogen.sh
<br>
$ ./configure CC=/usr/vac/bin/cc CPPFLAGS=&quot;-I/usr/include/ncurses&quot;
<br>
<p><p>and it configured and built correctly.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0309.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
