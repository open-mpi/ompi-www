<?
$subject_val = "Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 21 10:24:41 2011" -->
<!-- isoreceived="20110821142441" -->
<!-- sent="Sun, 21 Aug 2011 21:23:51 +0400" -->
<!-- isosent="20110821172351" -->
<!-- name="Mikhail Artemiev" -->
<!-- email="artemiev.mikhail_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0" -->
<!-- id="CCE192DCEE154FCBAD4E69BE5333EFEF_at_microsof9d3374" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B7FD2725-4C1B-44FF-A719-8B10B9C6D37C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error while loading shared libraries:libopen-pal.so.0<br>
<strong>From:</strong> Mikhail Artemiev (<em>artemiev.mikhail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-21 13:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17075.php">吕慧伟: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17073.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<li><strong>In reply to:</strong> <a href="17073.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are right!
<br>
Thank you very much!
<br>
<p>Mikhail Artemiev
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Sunday, August 21, 2011 3:34 PM
<br>
Subject: Re: [OMPI users] error while loading shared 
<br>
libraries:libopen-pal.so.0
<br>
<p><p><span class="quotelev1">&gt; Set your LD_LIBRARY_PATH to include the directory where your Open MPI 
</span><br>
<span class="quotelev1">&gt; installed libraries are located.  E.g., if you installed OMPI into 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi, then LD_LIBRARY_PATH likely needs to include 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2011, at 10:10 AM, Mikhail Artemiev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear users and developers!
</span><br>
<span class="quotelev2">&gt;&gt; Maybe it is not an error of open-mpi, but when I try to launch such 
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi command as mpicc, mpic++, ompi_info, I have this error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc/mpic++/ompi_info: error while loading shared libraries: 
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.so.0: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My OS is Ubuntu 10.04 LTS Lucid Lynx.
</span><br>
<span class="quotelev2">&gt;&gt; I can't find what is the library 'open-pal'. I didn't find anything about 
</span><br>
<span class="quotelev2">&gt;&gt; it in mailing list archives and FAQ.
</span><br>
<span class="quotelev2">&gt;&gt; What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Mikhail Artemiev
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17075.php">吕慧伟: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Previous message:</strong> <a href="17073.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<li><strong>In reply to:</strong> <a href="17073.php">Jeff Squyres: "Re: [OMPI users] error while loading shared libraries: libopen-pal.so.0"</a>
<!-- nextthread="start" -->
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
