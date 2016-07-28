<?
$subject_val = "Re: [OMPI users] Documentation of MPI Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 09:14:37 2011" -->
<!-- isoreceived="20110824131437" -->
<!-- sent="Wed, 24 Aug 2011 21:14:33 +0800" -->
<!-- isosent="20110824131433" -->
<!-- name="Hoang-Vu Dang" -->
<!-- email="dang.hvu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Documentation of MPI Implementation" -->
<!-- id="CAGrabN7-9zL=6=D4vcRzJeFFY_VOjDPank1BM0ukoru87ukxxA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B2D277EE-FE13-4E0D-AF81-8A40DE8CC34E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Documentation of MPI Implementation<br>
<strong>From:</strong> Hoang-Vu Dang (<em>dang.hvu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 09:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17095.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17093.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="17093.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17095.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Reply:</strong> <a href="17095.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>I know it depends and I want to know exactly what is the dependency and
<br>
general complexity analysis.
<br>
<p>Is it really no documentation at all ? For example you said &quot;to be replaced
<br>
soon&quot;, then what is the algorithms that will be used to replace ? Is there
<br>
any publication available ? In another words, how do you know they will be
<br>
replaced by which algorithm, please teach me !
<br>
Cheers,
<br>
Vu
<br>
<p>On Wed, Aug 24, 2011 at 9:07 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 23, 2011, at 3:32 AM, Hoang-Vu Dang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where could I find a detailed documentation about algorithms that has
</span><br>
<span class="quotelev1">&gt; been using in Open MPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, you probably won't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, I would like to answer following questions: how MPI_Algather
</span><br>
<span class="quotelev1">&gt; operation is done? what is the complexity in term of the number of data
</span><br>
<span class="quotelev1">&gt; send/receive given a number of node involved? what is the data structure
</span><br>
<span class="quotelev1">&gt; behind ?. Same as for MPI_Alreduce etc..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of OMPI's collectives are implemented as plugins under the
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/ tree.  There are several different plugins in that tree --
</span><br>
<span class="quotelev1">&gt; each one has its own directory (with the exception of &quot;base&quot;, which is glue
</span><br>
<span class="quotelev1">&gt; code for the whole collective algorithm framework).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably want to look in the &quot;tuned&quot; component for OMPI's
</span><br>
<span class="quotelev1">&gt; current-generation algorithms (to be replaced soon, but that's what's mostly
</span><br>
<span class="quotelev1">&gt; used today).  &quot;tuned&quot; has many different algorithm implementations for each
</span><br>
<span class="quotelev1">&gt; MPI collective, and uses sophisticated run-time checking to determine which
</span><br>
<span class="quotelev1">&gt; to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the answer to your original query -- how is the MPI_Allgather operation
</span><br>
<span class="quotelev1">&gt; done?  -- is, &quot;it depends&quot; on things like message size, number of peers,
</span><br>
<span class="quotelev1">&gt; etc.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17095.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Previous message:</strong> <a href="17093.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="17093.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17095.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>Reply:</strong> <a href="17095.php">Jeff Squyres: "Re: [OMPI users] Documentation of MPI Implementation"</a>
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
