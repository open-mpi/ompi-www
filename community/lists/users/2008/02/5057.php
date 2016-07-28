<?
$subject_val = "Re: [OMPI users] Specifying -wdir";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 11:23:31 2008" -->
<!-- isoreceived="20080221162331" -->
<!-- sent="Thu, 21 Feb 2008 11:23:24 -0500" -->
<!-- isosent="20080221162324" -->
<!-- name="Kevin Durda" -->
<!-- email="durda1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying -wdir" -->
<!-- id="f55b29c20802210823j6e95e035gbeb0d277fe43f8ca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47BCA9F2.9020303_at_cnea.gov.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying -wdir<br>
<strong>From:</strong> Kevin Durda (<em>durda1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 11:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Previous message:</strong> <a href="5056.php">Si Hammond: "[OMPI users] MPI Reduce Error when using C++, C, F77 and F90 in same executable"</a>
<li><strong>In reply to:</strong> <a href="5055.php">R C Pasianot: "[OMPI users] Specifying -wdir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>Reply:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roberto,
<br>
<p>I think that you can do what you want if you use an appfile with something
<br>
like this:
<br>
<p>-host node1,node2,node3 -np 6 -wdir /WorkingDir/ appname
<br>
-host node4 -np 2 -wdir /DifferentWorkingDir/ appname
<br>
<p>Then run your program using &quot;mpirun --app appfilename&quot;.
<br>
<p>Kevin
<br>
<p><p>On Wed, Feb 20, 2008 at 5:30 PM, R C Pasianot &lt;pasianot_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there a way to specify different working directories for
</span><br>
<span class="quotelev1">&gt;  different hosts ?. I mean for a single application launched
</span><br>
<span class="quotelev1">&gt;  from one of them. Seems I can't do that in the hostfile ... :/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Roberto
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PS: I was unable to find the answer in the archives, sorry if
</span><br>
<span class="quotelev1">&gt;      it's too trivial.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>Previous message:</strong> <a href="5056.php">Si Hammond: "[OMPI users] MPI Reduce Error when using C++, C, F77 and F90 in same executable"</a>
<li><strong>In reply to:</strong> <a href="5055.php">R C Pasianot: "[OMPI users] Specifying -wdir"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
<li><strong>Reply:</strong> <a href="5059.php">R.C.Pasianot: "Re: [OMPI users] Specifying -wdir"</a>
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
