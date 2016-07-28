<?
$subject_val = "Re: [OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 08:50:20 2009" -->
<!-- isoreceived="20090302135020" -->
<!-- sent="Mon, 2 Mar 2009 08:41:17 -0500" -->
<!-- isosent="20090302134117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] defining different values for same environment variable" -->
<!-- id="C47D7F85-4DCA-44DB-816C-4C5F3B33C9A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> Re: [OMPI users] defining different values for same environment variable<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 08:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8269.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8267.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8266.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8270.php">Josh Hursey: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8270.php">Josh Hursey: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2009, at 4:02 AM, Nicolas Deladerriere wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I think you missed Matt's point -- he was suggesting writing a  
</span><br>
<span class="quotelev1">&gt; single script that just reacts accordingly to which host it is on  
</span><br>
<span class="quotelev1">&gt; and sets &gt; the environment variable before launching your back-end  
</span><br>
<span class="quotelev1">&gt; MPI executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got it, but I would like to be able to do it without creating/ 
</span><br>
<span class="quotelev1">&gt; copying new script on all nodes.
</span><br>
<p>Don't you already need to make your MPI executable available on all  
<br>
nodes?
<br>
<p>You could also use OMPI's &quot;filem&quot; mechanism to copy the script out to  
<br>
all nodes.  I actually never remember the details on this; Josh -- can  
<br>
you fill in here?
<br>
<p><span class="quotelev2">&gt; &gt; Additionally, note that mpirun's -x option *can* set environment  
</span><br>
<span class="quotelev1">&gt; variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes but with the following syntax, the $HOST environment variable is  
</span><br>
<span class="quotelev1">&gt; interpretated on all first node (where mpirun command is launched)  
</span><br>
<span class="quotelev1">&gt; and then exported to all other nodes.
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -x FOO=&quot;yow_$HOST&quot;
</span><br>
<span class="quotelev1">&gt; Is there another syntax to use ?
</span><br>
<span class="quotelev1">&gt; I could then use similar syntax than your previous example, but it  
</span><br>
<span class="quotelev1">&gt; is not really conveniant for 128 nodes ! :
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -x FOO=&quot;yow_n001&quot; : -np 1 -x FOO=&quot;yow_n002&quot; .......
</span><br>
<p>You can do a similar syntax in a file -- instead of using :'s to  
<br>
delimit the stanzas, you put each stanza on a separate line.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8269.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8267.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>In reply to:</strong> <a href="8266.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8270.php">Josh Hursey: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8270.php">Josh Hursey: "Re: [OMPI users] defining different values for same environment variable"</a>
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
