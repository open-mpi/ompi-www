<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 14:36:49 2009" -->
<!-- isoreceived="20090227193649" -->
<!-- sent="Fri, 27 Feb 2009 20:36:43 +0100" -->
<!-- isosent="20090227193643" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="7dd7eb6e0902271136o59f52612i23734014077b4b10_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d105ee120902270946vdbcc5d7k50fa578ab1807425_at_mail.gmail.com" -->
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
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 14:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8252.php">Jeff Squyres: "Re: [OMPI users] OMPI, and HPUX"</a>
<li><strong>Previous message:</strong> <a href="8250.php">Mahmoud Payami: "[OMPI users] threading bug?"</a>
<li><strong>In reply to:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8261.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt,
<br>
<p>Thanks for your solution, but I thought about that and it is not really
<br>
convenient in my configuration to change the executable on each node.
<br>
I would like to change only mpirun command.
<br>
<p><p><p>2009/2/27 Matt Hughes
<br>
&lt;matt.c.hughes+ompi_at_[hidden]&lt;matt.c.hughes%2Bompi_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; 2009/2/27 Nicolas Deladerriere &lt;nicolas.deladerriere_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; I am looking for a way to set environment variable with different value
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt; each node before running MPI executable. (not only export the environment
</span><br>
<span class="quotelev2">&gt; &gt; variable !)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I typically use a script for things like this.  So instead of
</span><br>
<span class="quotelev1">&gt; specifying your executable directly on the mpirun command line,
</span><br>
<span class="quotelev1">&gt; instead specify the script.  The script can set the environment
</span><br>
<span class="quotelev1">&gt; variable, then launch your executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/csh
</span><br>
<span class="quotelev1">&gt; setenv GMON_OUT_PREFIX 'gmon.out_'`/bin/uname -n`
</span><br>
<span class="quotelev1">&gt; myexe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --bynode --hostfile CLUSTER_NODES myscript
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if that csh syntax is right, but you get the idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mch
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8252.php">Jeff Squyres: "Re: [OMPI users] OMPI, and HPUX"</a>
<li><strong>Previous message:</strong> <a href="8250.php">Mahmoud Payami: "[OMPI users] threading bug?"</a>
<li><strong>In reply to:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8261.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
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
