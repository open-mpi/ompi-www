<?
$subject_val = "Re: [OMPI users] Basic question on compiling fortran with windows computer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 04:01:41 2014" -->
<!-- isoreceived="20140108090141" -->
<!-- sent="Wed, 08 Jan 2014 10:01:33 +0100" -->
<!-- isosent="20140108090133" -->
<!-- name="Johanna Schauer" -->
<!-- email="JohannaSchauer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic question on compiling fortran with windows computer" -->
<!-- id="52CD13ED.5080208_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DEFE9287-83C5-4697-B2C7-E98EA1D1CA3A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Basic question on compiling fortran with windows computer<br>
<strong>From:</strong> Johanna Schauer (<em>JohannaSchauer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 04:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>Previous message:</strong> <a href="23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>In reply to:</strong> <a href="23326.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks a lot. I will check that!
<br>
<p>Best wishes,
<br>
Johanna
<br>
<p><p>Am 07.01.2014 00:16, schrieb Jeff Squyres (jsquyres):
<br>
<span class="quotelev1">&gt; Sorry -- I was offline for the MPI_Festivus(3) break, and just returned to the office today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't have the mpif90 or mpif77 executables in the same directory as the mpicc executable, then your installation did not build with Fortran support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the output of &quot;ompi_info -a&quot;, too -- that will indicate whether your OMPI installation expects to have Fortran support included or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2013, at 9:18 AM, Johanna Schauer &lt;JohannaSchauer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot for your response. When I use &quot;mpif90&quot; I get the same response as before (&quot;'mpif90' is not recognized as an internal or external command, operable program or batch file.&quot;).
</span><br>
<span class="quotelev2">&gt;&gt; Are there any settings I might need to adjust (path variables etc.) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot and best wishes,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Johanna
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 17.12.2013 21:32, schrieb Jeff Squyres (jsquyres):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the OMPI 1.6 series, the Fortran wrapper compilers are named &quot;mpif77&quot; and &quot;mpif90&quot;.  They were consolidated down to &quot;mpifort&quot; starting with OMPI 1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 17, 2013, at 2:18 PM, Johanna Schauer &lt;JohannaSchauer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been looking for an answer everywhere, but I cannot find much on this topic.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a fortran code that uses open mpi. Also, I have a windows 8 computer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have gfortran installed on my computer and it compiles just fine by itself.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now, I have downloaded and installed Open MPI v.1.6.2-2 win 64.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried to compile my file with the command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpifort -o  test test.f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All I get back is the following message: &quot;'mpifort' is not recognized as an internal or external command,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operable program or batch file.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would be very thankful for any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best wishes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Johanna
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>Previous message:</strong> <a href="23331.php">tmishima_at_[hidden]: "[OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<li><strong>In reply to:</strong> <a href="23326.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Basic question on compiling fortran with windows computer"</a>
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
