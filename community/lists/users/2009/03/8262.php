<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 04:33:10 2009" -->
<!-- isoreceived="20090302093310" -->
<!-- sent="Mon, 2 Mar 2009 10:33:05 +0100" -->
<!-- isosent="20090302093305" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="9b0da5ce0903020133p66c8f9fembe2b88aa91ebb82_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7dd7eb6e0903020102g67938c69qe00e1b08d9e7dc95_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 04:33:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8263.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8261.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8261.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8263.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I don't understand why it is a problem to copy a single script to your nodes -
<br>
wouldn't the following shell-script work?
<br>
<p>&nbsp;&nbsp;#!/bin/sh
<br>
&nbsp;&nbsp;for num in `seq 128`
<br>
&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;scp new_script username_at_host_$num:path/to/workdir/
<br>
&nbsp;&nbsp;done
<br>
<p>jody
<br>
<p><p>On Mon, Mar 2, 2009 at 10:02 AM, Nicolas Deladerriere
<br>
&lt;nicolas.deladerriere_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; I think you missed Matt's point -- he was suggesting writing a single
</span><br>
<span class="quotelev2">&gt;&gt; script that just reacts accordingly to which host it is on and sets &gt; the
</span><br>
<span class="quotelev2">&gt;&gt; environment variable before launching your back-end MPI executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got it, but I would like to be able to do it without creating/copying new
</span><br>
<span class="quotelev1">&gt; script on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, note that mpirun's -x option *can* set environment variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes but with the following syntax, the $HOST environment variable is
</span><br>
<span class="quotelev1">&gt; interpretated on all first node (where mpirun command is launched) and then
</span><br>
<span class="quotelev1">&gt; exported to all other nodes.
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -x FOO=&quot;yow_$HOST&quot;
</span><br>
<span class="quotelev1">&gt; Is there another syntax to use ?
</span><br>
<span class="quotelev1">&gt; I could then use similar syntax than your previous example, but it is not
</span><br>
<span class="quotelev1">&gt; really conveniant for 128 nodes ! :
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -x FOO=&quot;yow_n001&quot; : -np 1 -x FOO=&quot;yow_n002&quot; .......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Nicolas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/2/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you missed Matt's point -- he was suggesting writing a single
</span><br>
<span class="quotelev2">&gt;&gt; script that just reacts accordingly to which host it is on and sets the
</span><br>
<span class="quotelev2">&gt;&gt; environment variable before launching your back-end MPI executable.
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Specifically, instead of:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun ... my_mpi_app
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you would do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun ... script.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and script.sh would be something like Matt mentioned; it constructs the
</span><br>
<span class="quotelev2">&gt;&gt; GMON_OUT_PREFIX environment variable and then launches my_mpi_app.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, note that mpirun's -x option *can* set environment variable.
</span><br>
<span class="quotelev2">&gt;&gt; &#160;For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; shell$ cat run
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; echo $FOO
</span><br>
<span class="quotelev2">&gt;&gt; shell$ mpirun -np 1 -x FOO=bar ./run : -np 1 -x FOO=yow ./run
</span><br>
<span class="quotelev2">&gt;&gt; bar
</span><br>
<span class="quotelev2">&gt;&gt; yow
</span><br>
<span class="quotelev2">&gt;&gt; shell$
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 27, 2009, at 2:36 PM, Nicolas Deladerriere wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your solution, but I thought about that and it is not really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convenient in my configuration to change the executable on each node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to change only mpirun command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/2/27 Matt Hughes &lt;matt.c.hughes+ompi_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/2/27 Nicolas Deladerriere &lt;nicolas.deladerriere_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am looking for a way to set environment variable with different value
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; each node before running MPI executable. (not only export the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; variable !)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I typically use a script for things like this. &#160;So instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifying your executable directly on the mpirun command line,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead specify the script. &#160;The script can set the environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable, then launch your executable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/csh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv GMON_OUT_PREFIX 'gmon.out_'`/bin/uname -n`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myexe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --bynode --hostfile CLUSTER_NODES myscript
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure if that csh syntax is right, but you get the idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8263.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8261.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8261.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8263.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
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
