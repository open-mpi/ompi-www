<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 09:00:11 2009" -->
<!-- isoreceived="20090302140011" -->
<!-- sent="Mon, 2 Mar 2009 09:01:19 -0500" -->
<!-- isosent="20090302140119" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="6D0C160B-5445-4B5F-85B9-14B366F439C2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C47D7F85-4DCA-44DB-816C-4C5F3B33C9A2_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 09:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8269.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8268.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2009, at 8:41 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 2, 2009, at 4:02 AM, Nicolas Deladerriere wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I think you missed Matt's point -- he was suggesting writing a  
</span><br>
<span class="quotelev2">&gt;&gt; single script that just reacts accordingly to which host it is on  
</span><br>
<span class="quotelev2">&gt;&gt; and sets &gt; the environment variable before launching your back-end  
</span><br>
<span class="quotelev2">&gt;&gt; MPI executable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got it, but I would like to be able to do it without creating/ 
</span><br>
<span class="quotelev2">&gt;&gt; copying new script on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't you already need to make your MPI executable available on all  
</span><br>
<span class="quotelev1">&gt; nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could also use OMPI's &quot;filem&quot; mechanism to copy the script out  
</span><br>
<span class="quotelev1">&gt; to all nodes.  I actually never remember the details on this; Josh  
</span><br>
<span class="quotelev1">&gt; -- can you fill in here?
</span><br>
<p>You can distribute the binary target of mpirun to all nodes using the  
<br>
--preload-binary option to mpirun:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun --preload-binary my-script
<br>
<p>You can also distribute other files and directories using the -- 
<br>
preload-files option to mpirun:
<br>
&nbsp;&nbsp;&nbsp;shell$ mpirun --preload-files=foo.txt,../bar.txt,/home/fred/mydir  
<br>
my-script
<br>
<p>Note that this feature is available on the Open MPI trunk, and in the  
<br>
upcoming v1.3.1 (there was a bug in the v1.3.0 release that prevented  
<br>
it from working correctly).
<br>
<p>The documentation on this feature is lacking, I'll file a ticket to  
<br>
remind me to write a FAQ on this option.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Additionally, note that mpirun's -x option *can* set environment  
</span><br>
<span class="quotelev2">&gt;&gt; variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes but with the following syntax, the $HOST environment variable  
</span><br>
<span class="quotelev2">&gt;&gt; is interpretated on all first node (where mpirun command is  
</span><br>
<span class="quotelev2">&gt;&gt; launched) and then exported to all other nodes.
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 -x FOO=&quot;yow_$HOST&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Is there another syntax to use ?
</span><br>
<span class="quotelev2">&gt;&gt; I could then use similar syntax than your previous example, but it  
</span><br>
<span class="quotelev2">&gt;&gt; is not really conveniant for 128 nodes ! :
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 -x FOO=&quot;yow_n001&quot; : -np 1 -x FOO=&quot;yow_n002&quot; .......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do a similar syntax in a file -- instead of using :'s to  
</span><br>
<span class="quotelev1">&gt; delimit the stanzas, you put each stanza on a separate line.
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
<li><strong>Next message:</strong> <a href="8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<li><strong>Previous message:</strong> <a href="8269.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8268.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
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
