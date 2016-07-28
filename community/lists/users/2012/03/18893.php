<?
$subject_val = "Re: [OMPI users] redirecting output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 12:32:46 2012" -->
<!-- isoreceived="20120330163246" -->
<!-- sent="Fri, 30 Mar 2012 12:32:37 -0400" -->
<!-- isosent="20120330163237" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] redirecting output" -->
<!-- id="4F75E025.2040707_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6870B775-FAB5-4626-84F7-A071A95A32E5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] redirecting output<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 12:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18894.php">Mateus Augusto: "[OMPI users] MPI_Unpublish_name and MPI_Close_port"</a>
<li><strong>Previous message:</strong> <a href="18892.php">Ralph Castain: "Re: [OMPI users] redirecting output"</a>
<li><strong>In reply to:</strong> <a href="18892.php">Ralph Castain: "Re: [OMPI users] redirecting output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18890.php">Tim Prince: "Re: [OMPI users] redirecting output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried the
<br>
--output-filename &lt;filename&gt;
<br>
switch to mpirun?
<br>
man mpirun may help.
<br>
<p>If you are running under a resource manager,
<br>
such as Torque, the stdout may be retained in
<br>
the execution node until the war is over ...
<br>
well ... the job finishes.
<br>
<p>Gus Correa
<br>
<p><p><p><p>On 03/30/2012 11:44 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Have you looked at &quot;mpirun -h&quot;? There are several options available for
</span><br>
<span class="quotelev1">&gt; redirecting output, including redirecting it to files by rank so it is
</span><br>
<span class="quotelev1">&gt; separated by application process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, mpirun will send the output to stdout or stderr, based on
</span><br>
<span class="quotelev1">&gt; what your process does. The provided options just let you tag it, or
</span><br>
<span class="quotelev1">&gt; separate it by rank for convenience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2012, at 9:22 AM, tyler.balson_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:tyler.balson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi-1.4.5 and I just tried |tee ~/outputfile.txt and it
</span><br>
<span class="quotelev2">&gt;&gt; generated the file named outputfile.txt but again it was empty
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Marc Cozzi
</span><br>
<span class="quotelev2">&gt;&gt; [cozzi_at_[hidden] &lt;mailto:cozzi_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:*Friday, March 30, 2012 9:56 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:*Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:*Re: [OMPI users] redirecting output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does Pcrystal |tee ./outputfile.txt work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --marc
</span><br>
<span class="quotelev2">&gt;&gt; *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;[mailto:users-bounces_at_[hidden]]*On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of*Fran&#231;ois Tessier
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:*Friday, March 30, 2012 10:56 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:*Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:*Re: [OMPI users] redirecting output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you try to redirect also the error output? Maybe your application
</span><br>
<span class="quotelev2">&gt;&gt; write its output on stderr.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fran&#231;ois
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 30/03/2012 16:41,tyler.balson_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:tyler.balson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the command*mpirun -np nprocs -machinefile machines.arch
</span><br>
<span class="quotelev2">&gt;&gt; Pcrystal*and my output strolls across my terminal I would like to send
</span><br>
<span class="quotelev2">&gt;&gt; this output to a file and I cannot figure out how to do so....I have
</span><br>
<span class="quotelev2">&gt;&gt; tried the general &gt; FILENAME and &gt; log &amp; ....these generate files
</span><br>
<span class="quotelev2">&gt;&gt; however they are empty.....any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for reading
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tyler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18894.php">Mateus Augusto: "[OMPI users] MPI_Unpublish_name and MPI_Close_port"</a>
<li><strong>Previous message:</strong> <a href="18892.php">Ralph Castain: "Re: [OMPI users] redirecting output"</a>
<li><strong>In reply to:</strong> <a href="18892.php">Ralph Castain: "Re: [OMPI users] redirecting output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18890.php">Tim Prince: "Re: [OMPI users] redirecting output"</a>
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
