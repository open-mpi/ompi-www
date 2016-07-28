<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 22:11:43 2007" -->
<!-- isoreceived="20070807021143" -->
<!-- sent="Tue, 07 Aug 2007 12:11:37 +1000" -->
<!-- isosent="20070807021137" -->
<!-- name="Graham Jenkins" -->
<!-- email="Graham.Jenkins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NAMD/Charm++ Looking for libmpich" -->
<!-- id="46B7D4D9.8010001_at_its.monash.edu.au" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D3E858D7-B079-4B05-868C-526B95E05E30_at_umich.edu" -->
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
<strong>From:</strong> Graham Jenkins (<em>Graham.Jenkins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 22:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3821.php">Geoffroy PIGNOT: "[OMPI users] homogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="3819.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>In reply to:</strong> <a href="3818.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I have done work before to make namd and charm++ work with openMPI I  
</span><br>
<span class="quotelev1">&gt; dont remember what but it is doable.  Something like removing -lmpich  
</span><br>
<span class="quotelev1">&gt; was enough i think, maybe a hack to use mpiCC and -fPIC (pgi compilers).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could look more if you want.
</span><br>
<pre>
--
I'd really appreciate that Brock, thanks!  Where would one remove
&quot;-lmpich&quot; from?   I've had some difficulty finding it.
It actually builds OK using:
  ./build charm++ mpi-linux-amd64 ifort \
        --basedir /opt/sw/openmpi-1.2.3-i
But if barfs when you try to do: &quot;try out a sample program like
tests/charm++/simplearrayhello&quot;
You can actually make the test compile by doing:
  cd /opt/sw/openmpi-1.2.3-i/lib ; ln -s libmpi.so.0.0.0 libmpich.so
  .. but I'm not sure that it's legit! :)
-- 
Graham Jenkins
Senior Software Specialist, E-Research
Email: Graham.Jenkins_at_[hidden]
Tel:   +613 9905-5942
Mob:   +614 4850-2491
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3821.php">Geoffroy PIGNOT: "[OMPI users] homogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="3819.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>In reply to:</strong> <a href="3818.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3826.php">Rainer Keller: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
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
