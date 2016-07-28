<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 10:39:51 2006" -->
<!-- isoreceived="20060616143951" -->
<!-- sent="Fri, 16 Jun 2006 16:39:44 +0200" -->
<!-- isosent="20060616143944" -->
<!-- name="Martin Schaff&#246;ner" -->
<!-- email="martin.schaffoener_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface" -->
<!-- id="200606161639.44794.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFA433FD_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Martin Schaff&#246;ner (<em>martin.schaffoener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-16 10:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1437.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>In reply to:</strong> <a href="1433.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 16 June 2006 16:03, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Can you repeat this and run a non-MPI executable such as &quot;hostname&quot;?  I
</span><br>
<span class="quotelev1">&gt; want to take MPI out of the equation and just test the launching system.
</span><br>
<p>Sorry, forgot that. So I executed 
<br>
<p>mpiexec -np 1 -d --mca pls tm --mca pls_tm_debug 1 -x 
<br>
PATH --prefix /opt/openmpi hostname &gt; openmpi1.log 2&gt;&amp;1
<br>
<p>and the log is attached.
<br>
<p><span class="quotelev1">&gt; Can you also verify that you are correctly matching your OMPI installations
</span><br>
<span class="quotelev1">&gt; on all nodes?  I.e., that you've got Open MPI installed in the same
</span><br>
<span class="quotelev1">&gt; location on all nodes in your cluster, and your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; are pointing to the version of Open MPI that you intend to use.
</span><br>
<p>Well, all the nodes share the installation through NFS. The PATH is entered 
<br>
into $HOME/.bashrc, but I also export the PATH variable as you can see above. 
<br>
LD_LIBRARY_PATH is not necessary as openmpi was only built with static 
<br>
libraries and libtorque.so can be found through /etc/ld.so.cache on all 
<br>
nodes.
<br>
<p><span class="quotelev2">&gt; &gt; (could it be
</span><br>
<span class="quotelev2">&gt; &gt; that the mailing list has problems with utf8 posts?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually got both your session logs ok...?
</span><br>
<p>In my first two posts, all the linebreaks were missing. But if you say it was 
<br>
okay for you then I won't worry any longer!
<br>
<p>Regards,
<br>
<pre>
-- 
Martin Schaff&#246;ner
Cognitive Systems Group, Institute of Electronics, Signal Processing and 
Communication Technologies, Department of Electrical Engineering, 
Otto-von-Guericke University Magdeburg
Phone: +49 391 6720063

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1436/openmpi1.log.gz">openmpi1.log.gz</a>
</ul>
<!-- attachment="openmpi1.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1437.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>In reply to:</strong> <a href="1433.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
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
