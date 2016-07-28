<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 10:05:00 2007" -->
<!-- isoreceived="20070517140500" -->
<!-- sent="Thu, 17 May 2007 07:04:22 -0700" -->
<!-- isosent="20070517140422" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT with ompiv1.2" -->
<!-- id="4D863C26-EE6F-4F3E-9238-82480DC7D8AD_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C901825449_at_mtlexch01.mtl.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-17 10:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0296.php">Shai Venter: "[MTT users] How can I know the path to mpicc ?"</a>
<li><strong>Previous message:</strong> <a href="0294.php">Shai Venter: "[MTT users] MTT with ompiv1.2"</a>
<li><strong>In reply to:</strong> <a href="0294.php">Shai Venter: "[MTT users] MTT with ompiv1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe that we currently support setenv in the MPI Get  
<br>
phase, mainly because we didn't know that anyone would be using it  
<br>
there.
<br>
<p>What do you need to do, specifically?
<br>
<p>FWIW, MTT should handle all paths internally -- it builds everything  
<br>
inside the scratch tree, maintaining the different trees for all the  
<br>
different get's and install's.
<br>
<p><p>On May 17, 2007, at 6:50 AM, Shai Venter wrote:
<br>
<p><span class="quotelev1">&gt; Hi There !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the .ini file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using setenv in the MPI Get: phase, should set me an Enviroment  
</span><br>
<span class="quotelev1">&gt; var, right ?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if , let say, I write setenv = MPIHOMEDIR  &amp;shell(&#147;pwd&#148;)/install  
</span><br>
<span class="quotelev1">&gt; should set MPIHOMEDIR to some path as mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I checked for my MPIHOMEDIR  in the env ( cmd line:   env | 
</span><br>
<span class="quotelev1">&gt; grep MPI ) and got nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What did I not do right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shai Venter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q.A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies, Ltd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +972 (0)4  9097200 ext. 252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +972 (0)50 2888637
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0296.php">Shai Venter: "[MTT users] How can I know the path to mpicc ?"</a>
<li><strong>Previous message:</strong> <a href="0294.php">Shai Venter: "[MTT users] MTT with ompiv1.2"</a>
<li><strong>In reply to:</strong> <a href="0294.php">Shai Venter: "[MTT users] MTT with ompiv1.2"</a>
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
