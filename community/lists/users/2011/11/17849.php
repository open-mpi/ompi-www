<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 19:32:32 2011" -->
<!-- isoreceived="20111129003232" -->
<!-- sent="Mon, 28 Nov 2011 19:32:27 -0500" -->
<!-- isosent="20111129003227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="B1F152A0-1C93-446B-B2D0-FF73DB68409B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B7956569-2B50-4166-A164-9757E4FF06EC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 19:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17850.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17848.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17848.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17850.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17850.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2011, at 6:56 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid that example is incorrect - you were running under slurm on your cluster, not rsh.
</span><br>
<p>Ummm... right.  Duh.
<br>
<p><span class="quotelev1">&gt; If you look at the actual code, you will see that we slurp up the envars into the environment of each app_context, and then send that to the backend.
</span><br>
<p>Ah, right -- here's running under rsh (SVN trunk):
<br>
<p>-----
<br>
[16:26] svbu-mpi:~ % cat run
<br>
#!/bin/csh -f
<br>
<p>echo on `hostname`, foo is: $OMPI_MCA_foo
<br>
exit 0
<br>
[16:26] svbu-mpi:~ % mpirun -np 2 --host svbu-mpi043,svbu-mpi044 run
<br>
OMPI_MCA_foo: Undefined variable.
<br>
OMPI_MCA_foo: Undefined variable.
<br>
-------------------------------------------------------
<br>
While the primary job  terminated normally, 2 processes returned
<br>
non-zero exit codes.. Further examination may be required.
<br>
-------------------------------------------------------
<br>
[16:26] svbu-mpi:~ % setenv OMPI_MCA_foo bar
<br>
[16:27] svbu-mpi:~ % mpirun -np 2 --host svbu-mpi043,svbu-mpi044 run
<br>
on svbu-mpi044, foo is: bar
<br>
on svbu-mpi043, foo is: bar
<br>
[16:27] svbu-mpi:~ % 
<br>
-----
<br>
<p>(the &quot;MCA_&quot; here is superfluous -- I looked at the code and the man page that Paul cited, and see that we grab all env vars OMPI_*, not OMPI_MCA_*).
<br>
<p><span class="quotelev1">&gt; In environments like slurm, we can also apply those envars to the launch of the orteds as we pass the env to the API that launches the orteds. You cannot do that with rsh, as you know.
</span><br>
<p>Right-o.  Knew there was something I forgot...
<br>
<p><span class="quotelev1">&gt; So on rsh, we do not put envar mca params onto the orted cmd line. This has been noted repeatedly on the user and devel lists, so it really has always been the case.
</span><br>
<p>So they're sent as part of the launch command (i.e., out of band -- not on the rsh/ssh command line), right?
<br>
<p>Meaning that per my output from above, what Paul was trying should have worked, no?  I.e., setenv'ing OMPI_&lt;whatever&gt;, and those env vars should magically show up in the launched process.
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; [after performing some RTFM...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at least the man page of mpiexec says, the OMPI_ environment variables are always provided and thus treated *differently* than other envvars:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ man mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exported Environment Variables
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    All environment variables that are named in the form OMPI_* will  automatically  be  exported to new processes on the local and remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, tells the man page lies, or this is an removed feature, or something else?
</span><br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17850.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17848.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17848.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17850.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17850.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
