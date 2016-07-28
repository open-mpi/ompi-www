<?
$subject_val = "Re: [OMPI users] Can't start program across network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 21:12:31 2009" -->
<!-- isoreceived="20090314011231" -->
<!-- sent="Sat, 14 Mar 2009 10:12:20 +0900" -->
<!-- isosent="20090314011220" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start program across network" -->
<!-- id="49BB0474.9000407_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A3E502D1-EFE2-45EE-B723-6B44B94C16A9_at_cisco.com" -->
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
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 21:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Previous message:</strong> <a href="8437.php">Rolf Vandevaart: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 13, 2009, at 6:17 AM, Raymond Wan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What doesn't work is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [On Y] mpirun --host Y,Z --np 2 uname -a
</span><br>
<span class="quotelev2">&gt;&gt; [On Y] mpirun --host X,Y,Z --np 3 uname -a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...and similarly for machine Z.  I can confirm that from any of the 3 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you see &quot;rsh&quot; or &quot;ssh&quot; in the output of &quot;ps -eadf&quot; when mpirun is 
</span><br>
<span class="quotelev1">&gt; hanging, perchance?  If you, what happens if you copy-n-paste those 
</span><br>
<span class="quotelev1">&gt; command lines and run them manually?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>No, I don't see either rsh or ssh when mpirun is hanging.  Is that odd?  Something I'm doing wrong?
<br>
<p>I only see an mpirun command and an orted command.
<br>
<p><p>rwan     22800 22761  0 09:52 pts/2    00:00:00 mpirun --host X,Y,Z --np 3 sleep 1000
<br>
rwan     22804     1  0 09:52 ?        00:00:00 orted --bootproxy 1 --name 0.0.2 --num_procs 4 --vpid_start 0 --nodename Y --universe rwan_at_Y:default-universe-22800 --nsreplica &quot;0.0.0;tcp://Y:36889&quot; --gprreplica &quot;0.0.0;tcp://Y:36889&quot; --set-sid
<br>
<p><p>Actually, when I run the above mpirun command, I don't see &quot;sleep&quot; running locally on machine Y, either.  However, if I did this:
<br>
<p>mpirun --host Y --np 3 sleep 1000
<br>
<p>I see 3 instances of &quot;sleep&quot; when I do ps -aedf.  Does mpirun try to &quot;ssh&quot; all networked machines first before it starts the program (even if one of those instances will run locally?).  Perhaps unrelated...but when I am on Y and I do an rsh to Z, I get a &quot;No route to host&quot;.  I asked the sysadmin about it (I'm not the sysadmin of Y or Z) and he doesn't know why but as we should be using ssh anyway, he isn't going to address the problem (unless it is a side-effect of my mpirun problem). I only presume rsh hasn't been set up properly; ssh works fine, though.
<br>
<p>Thank you!
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Previous message:</strong> <a href="8437.php">Rolf Vandevaart: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
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
