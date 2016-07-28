<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 28 09:31:25 2009" -->
<!-- isoreceived="20090228143125" -->
<!-- sent="Sat, 28 Feb 2009 09:31:18 -0500" -->
<!-- isosent="20090228143118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="38E175B4-41F0-402A-BE28-888F4FAC9B62_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-28 09:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8262.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8266.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8266.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you missed Matt's point -- he was suggesting writing a single  
<br>
script that just reacts accordingly to which host it is on and sets  
<br>
the environment variable before launching your back-end MPI  
<br>
executable.  Specifically, instead of:
<br>
<p>mpirun ... my_mpi_app
<br>
<p>you would do
<br>
<p>mpirun ... script.sh
<br>
<p>and script.sh would be something like Matt mentioned; it constructs  
<br>
the GMON_OUT_PREFIX environment variable and then launches my_mpi_app.
<br>
<p>Additionally, note that mpirun's -x option *can* set environment  
<br>
variable.  For example:
<br>
<p>-----
<br>
shell$ cat run
<br>
#!/bin/sh
<br>
echo $FOO
<br>
shell$ mpirun -np 1 -x FOO=bar ./run : -np 1 -x FOO=yow ./run
<br>
bar
<br>
yow
<br>
shell$
<br>
-----
<br>
<p>On Feb 27, 2009, at 2:36 PM, Nicolas Deladerriere wrote:
<br>
<p><span class="quotelev1">&gt; Matt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your solution, but I thought about that and it is not  
</span><br>
<span class="quotelev1">&gt; really convenient in my configuration to change the executable on  
</span><br>
<span class="quotelev1">&gt; each node.
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
<span class="quotelev1">&gt; 2009/2/27 Nicolas Deladerriere &lt;nicolas.deladerriere_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; I am looking for a way to set environment variable with different  
</span><br>
<span class="quotelev1">&gt; value on
</span><br>
<span class="quotelev2">&gt; &gt; each node before running MPI executable. (not only export the  
</span><br>
<span class="quotelev1">&gt; environment
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8262.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8266.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8266.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
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
