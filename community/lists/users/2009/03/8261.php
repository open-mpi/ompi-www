<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 04:02:06 2009" -->
<!-- isoreceived="20090302090206" -->
<!-- sent="Mon, 2 Mar 2009 10:02:00 +0100" -->
<!-- isosent="20090302090200" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="7dd7eb6e0903020102g67938c69qe00e1b08d9e7dc95_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="38E175B4-41F0-402A-BE28-888F4FAC9B62_at_cisco.com" -->
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
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 04:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8262.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8260.php">Brett Pemberton: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="../../2009/02/8256.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8262.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8262.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8263.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I think you missed Matt's point -- he was suggesting writing a single
</span><br>
script that just reacts accordingly to which host it is on and sets &gt; the
<br>
environment variable before launching your back-end MPI executable.
<br>
<p>I got it, but I would like to be able to do it without creating/copying new
<br>
script on all nodes.
<br>
<p><span class="quotelev1">&gt; Additionally, note that mpirun's -x option *can* set environment variable.
</span><br>
<p>yes but with the following syntax, the $HOST environment variable is
<br>
interpretated on all first node (where mpirun command is launched) and then
<br>
exported to all other nodes.
<br>
*mpirun -np 2 -x FOO=&quot;yow_$HOST&quot;
<br>
*Is there another syntax to use ?*
<br>
*I could then use similar syntax than your previous example, but it is not
<br>
really conveniant for 128 nodes ! :
<br>
*mpirun -np 1 -x FOO=&quot;yow_n001&quot; : -np 1 -x FOO=&quot;yow_n002&quot; .......*
<br>
<p>Regards
<br>
Nicolas
<br>
<p>2009/2/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I think you missed Matt's point -- he was suggesting writing a single
</span><br>
<span class="quotelev1">&gt; script that just reacts accordingly to which host it is on and sets the
</span><br>
<span class="quotelev1">&gt; environment variable before launching your back-end MPI executable.
</span><br>
<span class="quotelev1">&gt;  Specifically, instead of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun ... my_mpi_app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you would do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun ... script.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and script.sh would be something like Matt mentioned; it constructs the
</span><br>
<span class="quotelev1">&gt; GMON_OUT_PREFIX environment variable and then launches my_mpi_app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, note that mpirun's -x option *can* set environment variable.
</span><br>
<span class="quotelev1">&gt;  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; shell$ cat run
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; echo $FOO
</span><br>
<span class="quotelev1">&gt; shell$ mpirun -np 1 -x FOO=bar ./run : -np 1 -x FOO=yow ./run
</span><br>
<span class="quotelev1">&gt; bar
</span><br>
<span class="quotelev1">&gt; yow
</span><br>
<span class="quotelev1">&gt; shell$
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2009, at 2:36 PM, Nicolas Deladerriere wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Matt,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your solution, but I thought about that and it is not really
</span><br>
<span class="quotelev2">&gt;&gt; convenient in my configuration to change the executable on each node.
</span><br>
<span class="quotelev2">&gt;&gt; I would like to change only mpirun command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/2/27 Matt Hughes &lt;matt.c.hughes+ompi_at_[hidden]&lt;matt.c.hughes%2Bompi_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/2/27 Nicolas Deladerriere &lt;nicolas.deladerriere_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am looking for a way to set environment variable with different value
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; each node before running MPI executable. (not only export the
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; variable !)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I typically use a script for things like this.  So instead of
</span><br>
<span class="quotelev2">&gt;&gt; specifying your executable directly on the mpirun command line,
</span><br>
<span class="quotelev2">&gt;&gt; instead specify the script.  The script can set the environment
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-8261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8262.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8260.php">Brett Pemberton: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="../../2009/02/8256.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8262.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8262.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8263.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
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
