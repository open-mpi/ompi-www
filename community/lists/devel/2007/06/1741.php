<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 18:32:20 2007" -->
<!-- isoreceived="20070621223220" -->
<!-- sent="Thu, 21 Jun 2007 15:32:13 -0700" -->
<!-- isosent="20070621223213" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] create new btl" -->
<!-- id="A55DB2D8-4A6C-45DB-A28B-D8362211480B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1183.88.27.233.215.1182465367.squirrel_at_atc.ugr.es" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-21 18:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1742.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1740.php">pcascon_at_[hidden]: "[OMPI devel] create new btl"</a>
<li><strong>In reply to:</strong> <a href="1740.php">pcascon_at_[hidden]: "[OMPI devel] create new btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1745.php">Pablo Cascón Katchadourian: "Re: [OMPI devel] create new btl"</a>
<li><strong>Reply:</strong> <a href="1745.php">Pablo Cascón Katchadourian: "Re: [OMPI devel] create new btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rerun the autogen.sh script and the new BTL will get auto-magically  
<br>
included in the build. You don't have to modify anything, just run  
<br>
the script.
<br>
<p>Once you get it compiled, you can specify --mca btl &lt;whatever&gt;,self  
<br>
on your mpirun command line to get access at runtime to your BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 21, 2007, at 3:36 PM, pcascon_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;    I just arrived to open-mpi. I'm trying to create a new btl. The  
</span><br>
<span class="quotelev1">&gt; goal is
</span><br>
<span class="quotelev1">&gt; to use open-mpi with a library that sends/receives packets with a
</span><br>
<span class="quotelev1">&gt; network processor (IXP) based board. Since it's an ethernet board I
</span><br>
<span class="quotelev1">&gt; thought the best way to start it's to reproduce the TCP btl. So I made
</span><br>
<span class="quotelev1">&gt; a copy of the directory ompi/mca/btl/tcp/ just to have something to
</span><br>
<span class="quotelev1">&gt; start. But then, I don't know how to include this &quot;new&quot; btl into the
</span><br>
<span class="quotelev1">&gt; build system (./configure ; make all install). My knowledge about the
</span><br>
<span class="quotelev1">&gt; GNU autotools it's not good enough I guess. I believe first step it's
</span><br>
<span class="quotelev1">&gt; to modify the configure script through 'autoconf' but not sure how to
</span><br>
<span class="quotelev1">&gt; do this. I've been searching for information about that on this
</span><br>
<span class="quotelev1">&gt; maillist with no luck. What will be the steps to create a basic btl?
</span><br>
<span class="quotelev1">&gt; What's the best way to integrate the code onto the whole open-mpi?
</span><br>
<span class="quotelev1">&gt; Thanks a lot for reading :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;    Pablo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1741/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1742.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1740.php">pcascon_at_[hidden]: "[OMPI devel] create new btl"</a>
<li><strong>In reply to:</strong> <a href="1740.php">pcascon_at_[hidden]: "[OMPI devel] create new btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1745.php">Pablo Cascón Katchadourian: "Re: [OMPI devel] create new btl"</a>
<li><strong>Reply:</strong> <a href="1745.php">Pablo Cascón Katchadourian: "Re: [OMPI devel] create new btl"</a>
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
