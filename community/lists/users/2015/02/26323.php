<?
$subject_val = "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 21:12:15 2015" -->
<!-- isoreceived="20150213021215" -->
<!-- sent="Thu, 12 Feb 2015 19:12:12 -0700" -->
<!-- isosent="20150213021212" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively" -->
<!-- id="20150213021212.GA739_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1559523397.54366936.1423779059715.JavaMail.zimbra_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 21:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Previous message:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="26321.php">Thibaud Kloczko: "[OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Reply:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Reply:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a bug in the MPI_MODE_NOCHECK path in osc/sm. It has been
<br>
fixed on master and a fix has been CMRed to 1.8. Thank you for reporting
<br>
this.
<br>
<p>In the meantime you can remove MPI_MODE_NOCHECK and it should work
<br>
fine.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 12, 2015 at 11:10:59PM +0100, Thibaud Kloczko wrote:
<br>
<span class="quotelev1">&gt;    Hi all,
</span><br>
<span class="quotelev1">&gt;    Here is my problem (see attached file for more details).
</span><br>
<span class="quotelev1">&gt;    I create a window using MPI_Win_allocate_shared.
</span><br>
<span class="quotelev1">&gt;    The rank 0 is then in charge to fill iteratively the shared buffers using
</span><br>
<span class="quotelev1">&gt;    the MPI_Put function.
</span><br>
<span class="quotelev1">&gt;    At each iteration, I use also MPI_Lock and MPI_Unlock function as follows:
</span><br>
<span class="quotelev1">&gt;    MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, MPI_MODE_NOCHECK, win);
</span><br>
<span class="quotelev1">&gt;    MPI_Put(&amp;i, buffer_size, MPI_BYTE, rank, position, buffer_size, MPI_BYTE,
</span><br>
<span class="quotelev1">&gt;    win);
</span><br>
<span class="quotelev1">&gt;    MPI_Win_unlock(wid, win);
</span><br>
<span class="quotelev1">&gt;    Surprisingly, at the second iteration, I get the following error:
</span><br>
<span class="quotelev1">&gt;    Open MPI v1.8.4, package: Open MPI Distribution, ident: 1.8.4, repo rev:
</span><br>
<span class="quotelev1">&gt;    v1.8.3-330-g0344f04, Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;    *** An error occurred in MPI_Win_lock
</span><br>
<span class="quotelev1">&gt;    *** reported by process [140394923687937,140393890971648]
</span><br>
<span class="quotelev1">&gt;    *** on win
</span><br>
<span class="quotelev1">&gt;    *** MPI_ERR_RMA_SYNC: error executing rma sync
</span><br>
<span class="quotelev1">&gt;    *** MPI_ERRORS_ARE_FATAL (processes in this win will now abort,
</span><br>
<span class="quotelev1">&gt;    ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;    I observed the same behaviour when allocating the window using
</span><br>
<span class="quotelev1">&gt;    MPI_Win_allocate function.
</span><br>
<span class="quotelev1">&gt;    On the other hand, everything works well with MPI_Win_Create.
</span><br>
<span class="quotelev1">&gt;    Am I wrong somewhere, any idea would be great :-) !
</span><br>
<span class="quotelev1">&gt;    Cheers,
</span><br>
<span class="quotelev1">&gt;    Thibaud Kloczko.
</span><br>
<span class="quotelev1">&gt;    -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    Ingenieur d'Experimentation et de Developpement
</span><br>
<span class="quotelev1">&gt;    Inria CRISAM
</span><br>
<span class="quotelev1">&gt;    2004, route des lucioles
</span><br>
<span class="quotelev1">&gt;    06902 Sophia Antipolis
</span><br>
<span class="quotelev1">&gt;    +33 4 92 38 50 03
</span><br>
<p><span class="quotelev1">&gt; // Version: $Id$
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // Commentary: 
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // Change Log:
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // Code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int cap = 101;
</span><br>
<span class="quotelev1">&gt;     int objectSize = sizeof(int);
</span><br>
<span class="quotelev1">&gt;     int buffer_size = cap * objectSize;
</span><br>
<span class="quotelev1">&gt;     int *array = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Win win;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Win_allocate_shared(buffer_size, objectSize, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;array, &amp;win);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int size;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         char version[MPI_MAX_LIBRARY_VERSION_STRING];
</span><br>
<span class="quotelev1">&gt;         int len;
</span><br>
<span class="quotelev1">&gt;         MPI_Get_library_version(version, &amp;len);
</span><br>
<span class="quotelev1">&gt;         std::cout &lt;&lt; version &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         for (int i = 0; i &lt; cap * size; ++i) {
</span><br>
<span class="quotelev1">&gt;             int wid = i / cap;
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; &quot;iteration &quot; &lt;&lt; i &lt;&lt; &quot; locking window&quot;  &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;             MPI_Win_lock(MPI_LOCK_EXCLUSIVE, wid, MPI_MODE_NOCHECK, win);
</span><br>
<span class="quotelev1">&gt;             MPI_Put(&amp;i, buffer_size, MPI_BYTE, wid, i%size, buffer_size, MPI_BYTE, win);
</span><br>
<span class="quotelev1">&gt;             std::cout &lt;&lt; &quot;unlocking &quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;             MPI_Win_unlock(wid, win);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; // main.cpp ends here
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26321.php">http://www.open-mpi.org/community/lists/users/2015/02/26321.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26323/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Previous message:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="26321.php">Thibaud Kloczko: "[OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Reply:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Reply:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
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
