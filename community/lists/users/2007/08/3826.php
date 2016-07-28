<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 10:43:44 2007" -->
<!-- isoreceived="20070807144344" -->
<!-- sent="Tue, 7 Aug 2007 16:43:41 +0200" -->
<!-- isosent="20070807144341" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NAMD/Charm++ Looking for libmpich" -->
<!-- id="200708071643.42243.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="46B7D4D9.8010001_at_its.monash.edu.au" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-07 10:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3825.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3820.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3833.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear Brock and Graham,
<br>
we have had NAMD on our clusters with Open MPI. look for any file 
<br>
conv-mach.sh; for the configuration mpi-linux, or in Your case 
<br>
mpi-linux-amd64 this contains the superfluous -lmpich.
<br>
<p>With best regards,
<br>
Rainer
<br>
<p>On Tuesday 07 August 2007 04:11, Graham Jenkins wrote:
<br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have done work before to make namd and charm++ work with openMPI I
</span><br>
<span class="quotelev2">&gt; &gt; dont remember what but it is doable.  Something like removing -lmpich
</span><br>
<span class="quotelev2">&gt; &gt; was enough i think, maybe a hack to use mpiCC and -fPIC (pgi compilers).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I could look more if you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd really appreciate that Brock, thanks!  Where would one remove
</span><br>
<span class="quotelev1">&gt; &quot;-lmpich&quot; from?   I've had some difficulty finding it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It actually builds OK using:
</span><br>
<span class="quotelev1">&gt;   ./build charm++ mpi-linux-amd64 ifort \
</span><br>
<span class="quotelev1">&gt;         --basedir /opt/sw/openmpi-1.2.3-i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if barfs when you try to do: &quot;try out a sample program like
</span><br>
<span class="quotelev1">&gt; tests/charm++/simplearrayhello&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can actually make the test compile by doing:
</span><br>
<span class="quotelev1">&gt;   cd /opt/sw/openmpi-1.2.3-i/lib ; ln -s libmpi.so.0.0.0 libmpich.so
</span><br>
<span class="quotelev1">&gt;   .. but I'm not sure that it's legit! :)
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3825.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3820.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3827.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3833.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
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
