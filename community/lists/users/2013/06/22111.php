<?
$subject_val = "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 17 13:50:58 2013" -->
<!-- isoreceived="20130617175058" -->
<!-- sent="Mon, 17 Jun 2013 19:50:40 +0200" -->
<!-- isosent="20130617175040" -->
<!-- name="Haroogan" -->
<!-- email="haroogan_at_[hidden]" -->
<!-- subject="[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)" -->
<!-- id="51BF4C70.9010902_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)<br>
<strong>From:</strong> Haroogan (<em>haroogan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-17 13:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22112.php">Shamis, Pavel: "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Previous message:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22115.php">Ralph Castain: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Reply:</strong> <a href="22115.php">Ralph Castain: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to build OpenMPI with CMake under MinGW-w64 based on GCC 
<br>
4.8.0 (POSIX Threads), and here is what I get:
<br>
<p>In file included from ../opal/threads/mutex_windows.h:36:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../opal/threads/mutex.h:121,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../opal/event/event.h:161,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../opal/event/log.c:60:
<br>
../opal/include/opal/sys/atomic.h:577:2: error: #error Atomic arithmetic 
<br>
on pointers not supported
<br>
&nbsp;&nbsp;#error Atomic arithmetic on pointers not supported
<br>
&nbsp;&nbsp;&nbsp;^
<br>
ninja: build stopped: subcommand failed.
<br>
<p>Any ideas?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22112.php">Shamis, Pavel: "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Previous message:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22115.php">Ralph Castain: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>Reply:</strong> <a href="22115.php">Ralph Castain: "Re: [OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
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
