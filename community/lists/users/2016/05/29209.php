<?
$subject_val = "Re: [OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 10:34:36 2016" -->
<!-- isoreceived="20160516143436" -->
<!-- sent="Mon, 16 May 2016 08:34:34 -0600" -->
<!-- isosent="20160516143434" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building vs packaging" -->
<!-- id="c0e88dab-1bed-941c-7fee-21891d820366_at_lanl.gov" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 10:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29210.php">Zabiziz Zaz: "[OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>In reply to:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Rob,
<br>
<p>I don't know if this is what is going on, but in general, when a package 
<br>
is installed via a distro's package management system, it ends up in 
<br>
system locations such as /usr/bin and /usr/lib that are automatically 
<br>
searched when looking for executables and libraries. So, it isn't 
<br>
necessarily that the package maintainers did much of anything different 
<br>
when putting together the package; instead, they may have put files in 
<br>
locations that are more accessible from a system-tool point of view. For 
<br>
example, the runtime linker knows to search in several system-defined 
<br>
directories such as /usr/lib. This might explain why everything worked 
<br>
after installing openmpi-bin: the binaries and libraries all ended up in 
<br>
system locations that are automatically a part of the environment on the 
<br>
remote node, so remote execution worked as it could find everything.
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><p>On 05/14/2016 05:37 AM, Rob Malpass wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I posted about a fortnight ago to this list as I was having some 
</span><br>
<span class="quotelev1">&gt; trouble getting my nodes to be controlled by my master node.   
</span><br>
<span class="quotelev1">&gt; Perceived wisdom at the time was to compile with the 
</span><br>
<span class="quotelev1">&gt; &#150;enable-orterun-prefix-by-default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some time I&#146;d been getting cannot open libopen-rte.so.7 which 
</span><br>
<span class="quotelev1">&gt; points to a problem with LD_LIBRARY_PATH.   I had been able to run it 
</span><br>
<span class="quotelev1">&gt; on nodes 3 and 4 even though (from headnode) if I do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh node4 &#145;echo $LD_LIBRARY_PATH&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; returns a blank line.   However &#150; as I say it&#146;s working on nodes 3 and 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had been hacking for ages on nodes 1 and 2 getting the same error 
</span><br>
<span class="quotelev1">&gt; but still with LD_LIBRARY_PATH apparently not set for an interactive 
</span><br>
<span class="quotelev1">&gt; login.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Almost in desperation, I cheated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo  apt-get install openmpi-bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and hey presto.   I can now do (from head node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun &#150;H node2,node3,node4 &#150;n 10 foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it works fine.   So clearly apt-get install has set something that 
</span><br>
<span class="quotelev1">&gt; I&#146;d not done (and it&#146;s seemingly not LD_LIBRARY_PATH) as ssh node2 
</span><br>
<span class="quotelev1">&gt; &#145;echo $LD_LIBRARY_PATH&#146; still returns a blank line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me what might be in the install script so I can get a 
</span><br>
<span class="quotelev1">&gt; clue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29201.php">http://www.open-mpi.org/community/lists/users/2016/05/29201.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-ENV High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29210.php">Zabiziz Zaz: "[OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29208.php">Ralph Castain: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>In reply to:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29211.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building vs packaging"</a>
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
