<?
$subject_val = "Re: [OMPI users] Can't start program across network";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 08:55:28 2009" -->
<!-- isoreceived="20090314125528" -->
<!-- sent="Sat, 14 Mar 2009 08:55:21 -0400" -->
<!-- isosent="20090314125521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start program across network" -->
<!-- id="FB8EF051-EF9D-4BCB-8DF9-589FC7019DB4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49BB0474.9000407_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't start program across network<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 08:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>In reply to:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8456.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8456.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>(including the network information)
<br>
<p>Thanks!
<br>
<p><p>On Mar 13, 2009, at 9:12 PM, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 13, 2009, at 6:17 AM, Raymond Wan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What doesn't work is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [On Y] mpirun --host Y,Z --np 2 uname -a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [On Y] mpirun --host X,Y,Z --np 3 uname -a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...and similarly for machine Z.  I can confirm that from any of  
</span><br>
<span class="quotelev1">&gt; the 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you see &quot;rsh&quot; or &quot;ssh&quot; in the output of &quot;ps -eadf&quot; when mpirun is
</span><br>
<span class="quotelev2">&gt; &gt; hanging, perchance?  If you, what happens if you copy-n-paste those
</span><br>
<span class="quotelev2">&gt; &gt; command lines and run them manually?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I don't see either rsh or ssh when mpirun is hanging.  Is that  
</span><br>
<span class="quotelev1">&gt; odd?  Something I'm doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only see an mpirun command and an orted command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rwan     22800 22761  0 09:52 pts/2    00:00:00 mpirun --host X,Y,Z  
</span><br>
<span class="quotelev1">&gt; --np 3 sleep 1000
</span><br>
<span class="quotelev1">&gt; rwan     22804     1  0 09:52 ?        00:00:00 orted --bootproxy 1  
</span><br>
<span class="quotelev1">&gt; --name 0.0.2 --num_procs 4 --vpid_start 0 --nodename Y --universe  
</span><br>
<span class="quotelev1">&gt; rwan_at_Y:default-universe-22800 --nsreplica &quot;0.0.0;tcp://Y:36889&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica &quot;0.0.0;tcp://Y:36889&quot; --set-sid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, when I run the above mpirun command, I don't see &quot;sleep&quot;  
</span><br>
<span class="quotelev1">&gt; running locally on machine Y, either.  However, if I did this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --host Y --np 3 sleep 1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see 3 instances of &quot;sleep&quot; when I do ps -aedf.  Does mpirun try to  
</span><br>
<span class="quotelev1">&gt; &quot;ssh&quot; all networked machines first before it starts the program  
</span><br>
<span class="quotelev1">&gt; (even if one of those instances will run locally?).  Perhaps  
</span><br>
<span class="quotelev1">&gt; unrelated...but when I am on Y and I do an rsh to Z, I get a &quot;No  
</span><br>
<span class="quotelev1">&gt; route to host&quot;.  I asked the sysadmin about it (I'm not the sysadmin  
</span><br>
<span class="quotelev1">&gt; of Y or Z) and he doesn't know why but as we should be using ssh  
</span><br>
<span class="quotelev1">&gt; anyway, he isn't going to address the problem (unless it is a side- 
</span><br>
<span class="quotelev1">&gt; effect of my mpirun problem). I only presume rsh hasn't been set up  
</span><br>
<span class="quotelev1">&gt; properly; ssh works fine, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>In reply to:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8456.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8456.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
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
