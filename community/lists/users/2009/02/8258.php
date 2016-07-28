<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 28 06:31:34 2009" -->
<!-- isoreceived="20090228113134" -->
<!-- sent="Sat, 28 Feb 2009 12:31:30 +0100" -->
<!-- isosent="20090228113130" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="9b0da5ce0902280331s539be7d3p442c6dd0738281e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7dd7eb6e0902271136o59f52612i23734014077b4b10_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] defining different values for same environment variable<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-28 06:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8259.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8257.php">Jeff Squyres: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>In reply to:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8261.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
perhaps you could use the Open-MPI environment variables
<br>
<p>OMPI_COMM_WORLD_RANK
<br>
OMPI_COMM_WORLD_LOCAL_RANK
<br>
<p>to construct your own environment variables?
<br>
(for versions &gt;= 1.3)
<br>
<p>Jody
<br>
<p>On Fri, Feb 27, 2009 at 8:36 PM, Nicolas Deladerriere
<br>
&lt;nicolas.deladerriere_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Matt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your solution, but I thought about that and it is not really
</span><br>
<span class="quotelev1">&gt; convenient in my configuration to change the executable on each node.
</span><br>
<span class="quotelev1">&gt; I would like to change only mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/2/27 Matt Hughes &lt;matt.c.hughes+ompi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/2/27 Nicolas Deladerriere &lt;nicolas.deladerriere_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am looking for a way to set environment variable with different value
</span><br>
<span class="quotelev3">&gt;&gt; &gt; on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; each node before running MPI executable. (not only export the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; environment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; variable !)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I typically use a script for things like this. &#160;So instead of
</span><br>
<span class="quotelev2">&gt;&gt; specifying your executable directly on the mpirun command line,
</span><br>
<span class="quotelev2">&gt;&gt; instead specify the script. &#160;The script can set the environment
</span><br>
<span class="quotelev2">&gt;&gt; variable, then launch your executable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/csh
</span><br>
<span class="quotelev2">&gt;&gt; setenv GMON_OUT_PREFIX 'gmon.out_'`/bin/uname -n`
</span><br>
<span class="quotelev2">&gt;&gt; myexe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --bynode --hostfile CLUSTER_NODES myscript
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure if that csh syntax is right, but you get the idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mch
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8259.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8257.php">Jeff Squyres: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>In reply to:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8261.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
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
