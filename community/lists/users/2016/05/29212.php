<?
$subject_val = "Re: [OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:04:11 2016" -->
<!-- isoreceived="20160516150411" -->
<!-- sent="Mon, 16 May 2016 16:04:09 +0100" -->
<!-- isosent="20160516150409" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building vs packaging" -->
<!-- id="8737pi6o46.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="01c801d1add4$fd059ad0$f710d070$_at_getiton.myzen.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building vs packaging<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29213.php">Dave Love: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<li><strong>In reply to:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Rob Malpass&quot; &lt;lug_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Almost in desperation, I cheated:
</span><br>
<p>Why is that cheating?  Unless you specifically want a different version,
<br>
it seems sensible to me, especially as you then have access to packaged
<br>
versions of at least some MPI programs.  Likewise with rpm-based
<br>
systems, which I'm afraid I know more about.
<br>
<p>Also the package system ensures that things don't break by inadvertently
<br>
removing their dependencies; the hwloc libraries might be an example.
<br>
<p><span class="quotelev1">&gt; sudo  apt-get install openmpi-bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and hey presto.   I can now do (from head node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -H node2,node3,node4 -n 10 foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it works fine.   So clearly apt-get install has set something that I'd
</span><br>
<span class="quotelev1">&gt; not done (and it's seemingly not LD_LIBRARY_PATH) as ssh node2 'echo
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH' still returns a blank line.
</span><br>
<p>No.  As I said recently, Debian installs a default MPI (via the
<br>
alternatives system) with libraries in the system search path.  Check
<br>
the library contents.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29213.php">Dave Love: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<li><strong>In reply to:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
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
