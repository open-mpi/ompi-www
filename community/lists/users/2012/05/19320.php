<?
$subject_val = "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 21 18:06:44 2012" -->
<!-- isoreceived="20120521220644" -->
<!-- sent="Mon, 21 May 2012 16:06:39 -0600" -->
<!-- isosent="20120521220639" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="4FBABC6F.7000200_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FB2863C.7070006_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-21 18:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Previous message:</strong> <a href="19319.php">Mudassar Majeed: "[OMPI users] Need MPI algorithms, please help"</a>
<li><strong>In reply to:</strong> <a href="19279.php">Orion Poplawski: "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/15/2012 10:37 AM, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; See <a href="https://bugzilla.redhat.com/show_bug.cgi?id=814798">https://bugzilla.redhat.com/show_bug.cgi?id=814798</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -showme:link
</span><br>
<span class="quotelev1">&gt; -pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -ldl and -lhwloc should not be listed.  The user should only link against
</span><br>
<span class="quotelev1">&gt; libraries that they are using directly, namely -lmpi, and they should
</span><br>
<span class="quotelev1">&gt; explicitly add -ldl and -lhwloc if their code directly uses those libraries.
</span><br>
<span class="quotelev1">&gt; There does not appear to be any references to libdl or libhwloc symbols in the
</span><br>
<span class="quotelev1">&gt; openmpi headers which is the other place it could come in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure appears to add them to opal_WRAPPER_EXTRA_LIBS which then makes its
</span><br>
<span class="quotelev1">&gt; way into this list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This report is with openmpi-1.5.5.  Haven't tested with 1.6, but configure
</span><br>
<span class="quotelev1">&gt; looks to do the same in it.
</span><br>
<p>Filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3103">https://svn.open-mpi.org/trac/ompi/ticket/3103</a>
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder Office                  FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Previous message:</strong> <a href="19319.php">Mudassar Majeed: "[OMPI users] Need MPI algorithms, please help"</a>
<li><strong>In reply to:</strong> <a href="19279.php">Orion Poplawski: "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
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
