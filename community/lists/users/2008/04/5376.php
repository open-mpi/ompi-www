<?
$subject_val = "Re: [OMPI users] i386 with x64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 07:40:01 2008" -->
<!-- isoreceived="20080411114001" -->
<!-- sent="Fri, 11 Apr 2008 07:39:44 -0400" -->
<!-- isosent="20080411113944" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] i386 with x64" -->
<!-- id="61C1E1AA-CEBA-4A80-A84B-B1D3431A1E9A_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0804110234w1fc1dd8fmd35b559a2939b4d9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] i386 with x64<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 07:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<li><strong>Previous message:</strong> <a href="5375.php">jody: "Re: [OMPI users] i386 with x64"</a>
<li><strong>In reply to:</strong> <a href="5375.php">jody: "Re: [OMPI users] i386 with x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5374.php">clarkmpi_at_[hidden]: "Re: [OMPI users] i386 with x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In Open MPI, we detect when the source and receiver side share the  
<br>
same architecture. Then, the datatype engine avoids type conversion  
<br>
(let say XDR, ou htonl) and sends raw binary data on the link. If the  
<br>
architecture mismatch, the datatype engine is forced to use some  
<br>
conversion which will lead to some overhead. On top of this, you can  
<br>
expect a slight overhead when using 64bit integer computation compared  
<br>
to 32bits (this is a general case for any 64bit application, due to  
<br>
more pressure on the memory bandwidth, though it does not change  
<br>
anything on floating point performance).
<br>
<p>Aurelien
<br>
Le 11 avr. 08 &#224; 05:34, jody a &#233;crit :
<br>
<span class="quotelev1">&gt; Aurelien:
</span><br>
<span class="quotelev1">&gt; What is the cause of this performance penalty?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 11, 2008 at 1:44 AM, Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI can manage heterogeneous system. Though you prefer to avoid
</span><br>
<span class="quotelev2">&gt;&gt; this because it has a performance penalty. I suggest you compile on
</span><br>
<span class="quotelev2">&gt;&gt; the 32bit machine and use the same version everywhere.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; Le 10 avr. 08 &#224; 18:09, clarkmpi_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks to those who answered my post in the past.  I have to admit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you lost me about half way through the thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was able to get 2 of my systems cranked up and was about to put a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; third system online when I remembered it was running x64 version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I just recompile the code on the x64 system and put it in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same home directory used by all the systems?  I'm not sharing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory across systems, but after doing this three or four times
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across just 2 systems, I can see why sharing would be advantages.
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
<li><strong>Next message:</strong> <a href="5377.php">Alessandro Palandri: "[OMPI users] Passing data structure"</a>
<li><strong>Previous message:</strong> <a href="5375.php">jody: "Re: [OMPI users] i386 with x64"</a>
<li><strong>In reply to:</strong> <a href="5375.php">jody: "Re: [OMPI users] i386 with x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5374.php">clarkmpi_at_[hidden]: "Re: [OMPI users] i386 with x64"</a>
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
