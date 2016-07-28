<?
$subject_val = "Re: [OMPI users] Accessing data member of MPI_File struct";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 23:35:51 2012" -->
<!-- isoreceived="20120831033551" -->
<!-- sent="Fri, 31 Aug 2012 12:35:46 +0900" -->
<!-- isosent="20120831033546" -->
<!-- name="Ammar Ahmad Awan" -->
<!-- email="ammar.ahmad.awan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing data member of MPI_File struct" -->
<!-- id="CAGSPLM=VsbxUUrwkU9Wrd+2V--igsbbP2XJ_mVkbL+56Y3yJwA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D307ABF8-D5CD-4014-8812-A498F471ECD4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing data member of MPI_File struct<br>
<strong>From:</strong> Ammar Ahmad Awan (<em>ammar.ahmad.awan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 23:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20079.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20077.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20080.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Reply:</strong> <a href="20080.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answer.
<br>
<p>Yes, I mistakenly printed the return value of the function rather than
<br>
atomicity.
<br>
<p>My real problem is that I want to access the fields from the MPI_File
<br>
structure other than the ones provided by the API e.g. the fd_sys.
<br>
<p>Atomicity was just one example I used to explain my problem. If MPI_File is
<br>
an opaque structure, is there any other way or any other structure through
<br>
which I can reach the fields?
<br>
<p>Thanks
<br>
-- ammar
<br>
<p>On Thu, Aug 30, 2012 at 8:48 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 30, 2012, at 5:05 AM, Ammar Ahmad Awan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; int atomicity;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; // method 1
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;atomicity : %d&quot;, MPI_File_get_atomicity(fh,&amp;atomicity));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you want:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int atomicity;
</span><br>
<span class="quotelev1">&gt; MPI_File_get_atomicity(fh, &amp;atomicity);
</span><br>
<span class="quotelev1">&gt; printf(&quot;atomicity: %d\n&quot;, atomicity);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_File is an opaque structure; you won't be able to access any of the
</span><br>
<span class="quotelev1">&gt; fields inside of it directly.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20079.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20077.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20080.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Reply:</strong> <a href="20080.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
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
