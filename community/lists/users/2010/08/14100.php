<?
$subject_val = "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 10:07:58 2010" -->
<!-- isoreceived="20100824140758" -->
<!-- sent="Tue, 24 Aug 2010 16:07:53 +0200" -->
<!-- isosent="20100824140753" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?" -->
<!-- id="4C73D239.1010403_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C73BB7F.4040509_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 10:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14101.php">Eugene Loh: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<li><strong>Previous message:</strong> <a href="14099.php">Terry Dontje: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<li><strong>In reply to:</strong> <a href="14099.php">Terry Dontje: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14101.php">Eugene Loh: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; You should be able to run &quot;./configure --help&quot; and see a lengthy help message that includes all the command line options to configure.
</span><br>
<span class="quotelev2">&gt;&gt; Is that what you're looking for?
</span><br>
<span class="quotelev1">&gt; No, he wants to know what configure options were used with some binaries.
</span><br>
<p><p>Yes Terry - I want to know what configure options were for a given 
<br>
installation! &quot;./configure --help&quot; helps but to guess which all of the 
<br>
options are used in a release, is a hard job..
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2010, at 7:40 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello OpenMPI developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am searching for a way to discover _all_ configure options of an OpenMPI installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Background: in a existing installation, the ompi_info program helps to find out a lot of informations about the installation. So, &quot;ompi_info -c&quot; shows *some* configuration options like CFLAGS, FFLAGS et cetera. Compilation directories often does not survive for long time (or are not shipped at all, e.g. with SunMPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But what about --enable-mpi-threads or --enable-contrib-no-build=vt for example (and all other possible) flags of &quot;configure&quot;, how can I see would these flags set or would not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words: is it possible to get _all_ flags of configure from an &quot;ready&quot; installation in without having the compilation dirs (with configure logs) any more?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14100/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14101.php">Eugene Loh: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<li><strong>Previous message:</strong> <a href="14099.php">Terry Dontje: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<li><strong>In reply to:</strong> <a href="14099.php">Terry Dontje: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14101.php">Eugene Loh: "Re: [OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
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
