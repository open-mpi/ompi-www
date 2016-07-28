<?
$subject_val = "Re: [OMPI users] MPI_Allgather problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 05:47:25 2012" -->
<!-- isoreceived="20120127104725" -->
<!-- sent="Fri, 27 Jan 2012 05:47:10 -0500" -->
<!-- isosent="20120127104710" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather problem" -->
<!-- id="4F2280AE.1040006_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEK89dBcucvRFRLytVnDAn09cmJCF1uULS1_0eFfQDOSocGtQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather problem<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 05:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18293.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18291.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="18290.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;ompi_info should tell you the current version of Open MPI your path is 
<br>
pointing to.
<br>
Are you sure your path is pointing to the area that the OpenFOAM package 
<br>
delivered Open MPI into?
<br>
<p>--td
<br>
On 1/27/2012 5:02 AM, Brett Tully wrote:
<br>
<span class="quotelev1">&gt; Interesting. In the same set of updates, I installed OpenFOAM from 
</span><br>
<span class="quotelev1">&gt; their Ubuntu deb package and it claims to ship with openmpi. I just 
</span><br>
<span class="quotelev1">&gt; downloaded their Third-party source tar and unzipped it to see what 
</span><br>
<span class="quotelev1">&gt; version of openmpi they are using, and it is 1.5.3. However, when I do 
</span><br>
<span class="quotelev1">&gt; man openmpi, or ompi_info, I get the same version as before (1.4.3). 
</span><br>
<span class="quotelev1">&gt; How do I determine for sure what is being included when I compile 
</span><br>
<span class="quotelev1">&gt; something using mpicc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brett.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 26, 2012 at 10:05 PM, Jeff Squyres &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What version did you upgrade to?  (we don't control the Ubuntu
</span><br>
<span class="quotelev1">&gt;     packaging)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I see a bullet in the soon-to-be-released 1.4.5 release notes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     - Fix obscure cases where MPI_ALLGATHER could crash.  Thanks to Andrew
</span><br>
<span class="quotelev1">&gt;      Senin for reporting the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But that would be surprising if this is what fixed your issue,
</span><br>
<span class="quotelev1">&gt;     especially since it's not released yet.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Jan 26, 2012, at 5:24 AM, Brett Tully wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; As of two days ago, this problem has disappeared and the tests
</span><br>
<span class="quotelev1">&gt;     that I had written and run each night are now passing. Having
</span><br>
<span class="quotelev1">&gt;     looked through the update log of my machine (Ubuntu 11.10) it
</span><br>
<span class="quotelev1">&gt;     appears as though I got a new version of mpi-default-dev
</span><br>
<span class="quotelev1">&gt;     (0.6ubuntu1). I would like to understand this problem in more
</span><br>
<span class="quotelev1">&gt;     detail -- is it possible to see what changed in this update?
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;     &gt; Brett.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Fri, Dec 9, 2011 at 6:43 PM, teng ma &lt;tma_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:tma_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; I guess your output is from different ranks.   YOu can add rank
</span><br>
<span class="quotelev1">&gt;     infor inside print to tell like follows:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; (void) printf(&quot;rank %d: gathered[%d].node = %d\n&quot;, rank, i,
</span><br>
<span class="quotelev1">&gt;     gathered[i].node);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; From my side, I did not see anything wrong from your code in
</span><br>
<span class="quotelev1">&gt;     Open MPI 1.4.3. after I add rank, the output is
</span><br>
<span class="quotelev2">&gt;     &gt; rank 5: gathered[0].node = 0
</span><br>
<span class="quotelev2">&gt;     &gt; rank 5: gathered[1].node = 1
</span><br>
<span class="quotelev2">&gt;     &gt; rank 5: gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; rank 5: gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; rank 5: gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; rank 5: gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt; rank 3: gathered[0].node = 0
</span><br>
<span class="quotelev2">&gt;     &gt; rank 3: gathered[1].node = 1
</span><br>
<span class="quotelev2">&gt;     &gt; rank 3: gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; rank 3: gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; rank 3: gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; rank 3: gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt; rank 1: gathered[0].node = 0
</span><br>
<span class="quotelev2">&gt;     &gt; rank 1: gathered[1].node = 1
</span><br>
<span class="quotelev2">&gt;     &gt; rank 1: gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; rank 1: gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; rank 1: gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; rank 1: gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt; rank 0: gathered[0].node = 0
</span><br>
<span class="quotelev2">&gt;     &gt; rank 0: gathered[1].node = 1
</span><br>
<span class="quotelev2">&gt;     &gt; rank 0: gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; rank 0: gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; rank 0: gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; rank 0: gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt; rank 4: gathered[0].node = 0
</span><br>
<span class="quotelev2">&gt;     &gt; rank 4: gathered[1].node = 1
</span><br>
<span class="quotelev2">&gt;     &gt; rank 4: gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; rank 4: gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; rank 4: gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; rank 4: gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt; rank 2: gathered[0].node = 0
</span><br>
<span class="quotelev2">&gt;     &gt; rank 2: gathered[1].node = 1
</span><br>
<span class="quotelev2">&gt;     &gt; rank 2: gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; rank 2: gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; rank 2: gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; rank 2: gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Is that what you expected?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Fri, Dec 9, 2011 at 12:03 PM, Brett Tully
</span><br>
<span class="quotelev1">&gt;     &lt;brett.tully_at_[hidden] &lt;mailto:brett.tully_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Dear all,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I have not used OpenMPI much before, but am maintaining a large
</span><br>
<span class="quotelev1">&gt;     legacy application. We noticed a bug to do with a call to
</span><br>
<span class="quotelev1">&gt;     MPI_Allgather as summarised in this post to Stackoverflow:
</span><br>
<span class="quotelev1">&gt;     <a href="http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results">http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; In the process of looking further into the problem, I noticed
</span><br>
<span class="quotelev1">&gt;     that the following function results in strange behaviour.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; void test_all_gather() {
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     struct _TEST_ALL_GATHER {
</span><br>
<span class="quotelev2">&gt;     &gt;         int node;
</span><br>
<span class="quotelev2">&gt;     &gt;     };
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     int ierr, size, rank;
</span><br>
<span class="quotelev2">&gt;     &gt;     ierr = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;     &gt;     ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     struct _TEST_ALL_GATHER local;
</span><br>
<span class="quotelev2">&gt;     &gt;     struct _TEST_ALL_GATHER *gathered;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     gathered = (struct _TEST_ALL_GATHER*) malloc(size *
</span><br>
<span class="quotelev1">&gt;     sizeof(*gathered));
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     local.node = rank;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_Allgather(&amp;local, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
</span><br>
<span class="quotelev2">&gt;     &gt;         gathered, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
</span><br>
<span class="quotelev1">&gt;     MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     int i;
</span><br>
<span class="quotelev2">&gt;     &gt;     for (i = 0; i &lt; numnodes; ++i) {
</span><br>
<span class="quotelev2">&gt;     &gt;         (void) printf(&quot;gathered[%d].node = %d\n&quot;, i,
</span><br>
<span class="quotelev1">&gt;     gathered[i].node);
</span><br>
<span class="quotelev2">&gt;     &gt;     }
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     FREE(gathered);
</span><br>
<span class="quotelev2">&gt;     &gt; }
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; At one point, this function printed the following:
</span><br>
<span class="quotelev2">&gt;     &gt; gathered[0].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; gathered[1].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;     &gt; gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;     &gt; gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;     &gt; gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Can anyone suggest a place to start looking into why this might
</span><br>
<span class="quotelev1">&gt;     be happening? There is a section of the code that calls
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_split, but I am not sure if that is related...
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Running on Ubuntu 11.10 and a summary of ompi_info:
</span><br>
<span class="quotelev2">&gt;     &gt; Package: Open MPI buildd_at_allspice Distribution
</span><br>
<span class="quotelev2">&gt;     &gt; Open MPI: 1.4.3
</span><br>
<span class="quotelev2">&gt;     &gt; Open MPI SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;     &gt; Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;     &gt; Open RTE: 1.4.3
</span><br>
<span class="quotelev2">&gt;     &gt; Open RTE SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;     &gt; Open RTE release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;     &gt; OPAL: 1.4.3
</span><br>
<span class="quotelev2">&gt;     &gt; OPAL SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;     &gt; OPAL release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;     &gt; Ident string: 1.4.3
</span><br>
<span class="quotelev2">&gt;     &gt; Prefix: /usr
</span><br>
<span class="quotelev2">&gt;     &gt; Configured architecture: x86_64-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;     &gt; Configure host: allspice
</span><br>
<span class="quotelev2">&gt;     &gt; Configured by: buildd
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks!
</span><br>
<span class="quotelev2">&gt;     &gt; Brett
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; | Teng Ma          Univ. of Tennessee |
</span><br>
<span class="quotelev2">&gt;     &gt; | tma_at_[hidden] &lt;mailto:tma_at_[hidden]&gt;        Knoxville, TN |
</span><br>
<span class="quotelev2">&gt;     &gt; | <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://web.eecs.utk.edu/%7Etma/">http://web.eecs.utk.edu/%7Etma/</a>&gt;       |
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18293.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18291.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="18290.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
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
