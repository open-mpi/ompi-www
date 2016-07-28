<?
$subject_val = "Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 21 07:34:08 2011" -->
<!-- isoreceived="20110821113408" -->
<!-- sent="Sun, 21 Aug 2011 07:34:03 -0400" -->
<!-- isosent="20110821113403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0" -->
<!-- id="B7FD2725-4C1B-44FF-A719-8B10B9C6D37C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FB0A3D0DF4A4B52B8BDB12189DFE77A_at_microsof9d3374" -->
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
<strong>Subject:</strong> Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-21 07:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17074.php">Mikhail Artemiev: "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0"</a>
<li><strong>Previous message:</strong> <a href="17072.php">Mikhail Artemiev: "[OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<li><strong>In reply to:</strong> <a href="17072.php">Mikhail Artemiev: "[OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17074.php">Mikhail Artemiev: "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0"</a>
<li><strong>Reply:</strong> <a href="17074.php">Mikhail Artemiev: "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Set your LD_LIBRARY_PATH to include the directory where your Open MPI installed libraries are located.  E.g., if you installed OMPI into /opt/openmpi, then LD_LIBRARY_PATH likely needs to include /opt/openmpi/lib.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>.
<br>
<p><p>On Aug 21, 2011, at 10:10 AM, Mikhail Artemiev wrote:
<br>
<p><span class="quotelev1">&gt; Dear users and developers!
</span><br>
<span class="quotelev1">&gt; Maybe it is not an error of open-mpi, but when I try to launch such open-mpi command as mpicc, mpic++, ompi_info, I have this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc/mpic++/ompi_info: error while loading shared libraries: libopen-pal.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My OS is Ubuntu 10.04 LTS Lucid Lynx.
</span><br>
<span class="quotelev1">&gt; I can't find what is the library 'open-pal'. I didn't find anything about it in mailing list archives and FAQ.
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Mikhail Artemiev
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17074.php">Mikhail Artemiev: "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0"</a>
<li><strong>Previous message:</strong> <a href="17072.php">Mikhail Artemiev: "[OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<li><strong>In reply to:</strong> <a href="17072.php">Mikhail Artemiev: "[OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17074.php">Mikhail Artemiev: "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0"</a>
<li><strong>Reply:</strong> <a href="17074.php">Mikhail Artemiev: "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0"</a>
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
