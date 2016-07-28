<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 09:23:23 2009" -->
<!-- isoreceived="20090702132323" -->
<!-- sent="Thu, 2 Jul 2009 09:23:14 -0400" -->
<!-- isosent="20090702132314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="C1BA0737-D8C8-45CF-B56B-1A8D43C727EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e75d22a90907020612w46f8534cg847547e1d2648db2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] quadrics support?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 09:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9801.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9801.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see ompi/mca/btl/elan in the OMPI SVN development trunk and in the  
<br>
1.3 tree (where elan = the quadrics interface).
<br>
<p>So actually, looking at the 1.3.x README, I see configure switches  
<br>
like &quot;--with-elan&quot; that specifies where the Elan (Quadrics) headers  
<br>
and libraries live.  I have no Quadrics networks and didn't pay  
<br>
attention to this development at all (obviously ;-) ) -- you might  
<br>
want to give it a shot and see how well it performs.  Meaning: I'm  
<br>
sure it works or UT wouldn't have pushed this stuff upstream, but I  
<br>
have no idea how well tuned it is.
<br>
<p>If you build OMPI properly, you should be able to tell if Quadrics  
<br>
support is included via
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info | grep elan
<br>
<p>You should see a BTL line for elan (i.e., a BTL plugin for &quot;elan&quot; is  
<br>
installed and functional).  Although OMPI should automatically pick  
<br>
elan for MPI communications, you can force OMPI to pick it via:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl elan,self ...
<br>
<p>Quadrics networks should also qualify for Open MPI's &quot;other&quot; type of  
<br>
network support (the MTL, instead of the BTL).  MTL level support can  
<br>
typically give slightly better performance on some types of networks,  
<br>
but it doesn't look like anyone did any work in this area.   
<br>
Contributions are always welcome, of course!  :-)
<br>
<p><p><p>On Jul 2, 2009, at 9:12 AM, Michael Di Domenico wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, honestly though if the patches haven't been pulled mainline,
</span><br>
<span class="quotelev1">&gt; we are not likely to bring it internally.  I was hoping that quadrics
</span><br>
<span class="quotelev1">&gt; support was mainline, but the documentation was out of date.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 2, 2009 at 8:08 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; George --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that U. Tennessee did some work in this area; did it ever
</span><br>
<span class="quotelev2">&gt; &gt; materialize?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 1, 2009, at 4:49 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did the quadrics support for OpenMPI ever materialize?  I can't  
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any documentation on the web about it and the few mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages I came across showed some hints that it might be in  
</span><br>
<span class="quotelev1">&gt; progress
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but that was way back in 2007
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9801.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>In reply to:</strong> <a href="9801.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9803.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9804.php">Swamy Kandadai: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
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
