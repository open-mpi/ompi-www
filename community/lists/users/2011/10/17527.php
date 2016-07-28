<?
$subject_val = "Re: [OMPI users] Open MPI error to define MPI_Datatype in header file";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 09:58:26 2011" -->
<!-- isoreceived="20111010135826" -->
<!-- sent="Mon, 10 Oct 2011 09:58:20 -0400" -->
<!-- isosent="20111010135820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error to define MPI_Datatype in header file" -->
<!-- id="CCD15FA1-5E2D-41E6-85C6-5050F788A1F7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-W17AE23D6E1572BF60993DDCBFC0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI error to define MPI_Datatype in header file<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 09:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17528.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17526.php">Jack Bryan: "[OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<li><strong>In reply to:</strong> <a href="17526.php">Jack Bryan: "[OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You'll need to be a bit more specific.  What describe should work fine.
<br>
<p>foo.h:
<br>
extern MPI_Datatype mydtype;
<br>
<p>foo.cc:
<br>
#inlclude &quot;foo.h&quot;
<br>
MPI_Datatype mydtype;
<br>
<p>bar.cc:
<br>
#include &quot;foo.h&quot;
<br>
void bogus(void) {
<br>
&nbsp;&nbsp;MPI_Datatype foo = mydtype;
<br>
}
<br>
<p>On Oct 9, 2011, at 4:10 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to define a (Open MPI) MPI_Datatype in a header file so that all other files that include it can find it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also try to use extern to do decleration in .h file and then define them in .cpp file. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I always get error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; undefined reference 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is not allowed in Open MPI ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17528.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17526.php">Jack Bryan: "[OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
<li><strong>In reply to:</strong> <a href="17526.php">Jack Bryan: "[OMPI users] Open MPI error to define MPI_Datatype in header file"</a>
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
