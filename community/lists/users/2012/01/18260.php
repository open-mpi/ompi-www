<?
$subject_val = "[OMPI users] Openmpi in Mingw";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 15:24:07 2012" -->
<!-- isoreceived="20120124202407" -->
<!-- sent="Tue, 24 Jan 2012 14:24:02 -0600" -->
<!-- isosent="20120124202402" -->
<!-- name="Temesghen Kahsai" -->
<!-- email="lememta_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi in Mingw" -->
<!-- id="E3DD54F2-9CA1-456F-9252-47416F66556C_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi in Mingw<br>
<strong>From:</strong> Temesghen Kahsai (<em>lememta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 15:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18261.php">devendra rai: "[OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Previous message:</strong> <a href="18259.php">Jeff Squyres: "Re: [OMPI users] Cant build OpenMPI!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18270.php">Shiqing Fan: "Re: [OMPI users] Openmpi in Mingw"</a>
<li><strong>Reply:</strong> <a href="18270.php">Shiqing Fan: "Re: [OMPI users] Openmpi in Mingw"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am having truble compiling openmpi (version 1.5.5rc2r25765 - nightly  
<br>
built) on Mingw. I am running Windows 7 and the latest version of Mingw.
<br>
I keep on getting the following error:
<br>
<p>In file included from ../../opal/include/opal_config_bottom.h:258:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../opal/include/opal_config.h:2327,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from asm.c:19:
<br>
../../opal/win32/win_compat.h:93:14: error: conflicting types for  
<br>
'ssize_t'
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/sys/types.h: 
<br>
118:18: note: previous declaration of 'ssize_t' wa
<br>
s here
<br>
In file included from ../../opal/include/opal_config_bottom.h:258:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../opal/include/opal_config.h:2327,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from asm.c:19:
<br>
../../opal/win32/win_compat.h:321:0: warning: &quot;OPAL_HAVE_HWLOC&quot;  
<br>
redefined [enabled by default]
<br>
../../opal/include/opal_config.h:1876:0: note: this is the location of  
<br>
the previous definition
<br>
In file included from ../../opal/include/opal_config.h:2327:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from asm.c:19:
<br>
../../opal/include/opal_config_bottom.h:559:0: warning: &quot;PF_UNSPEC&quot;  
<br>
redefined [enabled by default]
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/winsock2.h: 
<br>
368:0: note: this is the location of the previous definition
<br>
../../opal/include/opal_config_bottom.h:562:0: warning: &quot;AF_INET6&quot;  
<br>
redefined [enabled by default]
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/winsock2.h: 
<br>
329:0: note: this is the location of the previous definition
<br>
../../opal/include/opal_config_bottom.h:565:0: warning: &quot;PF_INET6&quot;  
<br>
redefined [enabled by default]
<br>
c:\mingw\bin\../lib/gcc/mingw32/4.6.2/../../../../include/winsock2.h: 
<br>
392:0: note: this is the location of the previous definition
<br>
<p><p>Thank you.
<br>
<p>T
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18261.php">devendra rai: "[OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Previous message:</strong> <a href="18259.php">Jeff Squyres: "Re: [OMPI users] Cant build OpenMPI!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18270.php">Shiqing Fan: "Re: [OMPI users] Openmpi in Mingw"</a>
<li><strong>Reply:</strong> <a href="18270.php">Shiqing Fan: "Re: [OMPI users] Openmpi in Mingw"</a>
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
