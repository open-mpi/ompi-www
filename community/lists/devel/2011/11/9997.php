<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 05:32:18 2011" -->
<!-- isoreceived="20111118103218" -->
<!-- sent="Fri, 18 Nov 2011 02:32:06 -0800" -->
<!-- isosent="20111118103206" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="BD15B200-B5CC-4B21-9BD9-8802E4238C38_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EC0ED1E.7010200_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 05:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="9996.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/09/11523.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/09/11523.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Yuki and Takahiro,
<br>
<p>Thanks for the bug report and for the patch. I pushed a [nearly identical] patch in the trunk in <a href="https://svn.open-mpi.org/trac/ompi/changeset/25488">https://svn.open-mpi.org/trac/ompi/changeset/25488</a>. A special version for the 1.4 has been prepared and has been attached to the ticket #2916 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2916">https://svn.open-mpi.org/trac/ompi/ticket/2916</a>).
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p><p>On Nov 14, 2011, at 02:27 , Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a member of MPI library development team in Fujitsu,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima, who sent mail before, is my colleague.
</span><br>
<span class="quotelev1">&gt; We start to feed back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, we fixed about MPI_LB/MPI_UB and data packing problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program crashes when it meets all of the following conditions:
</span><br>
<span class="quotelev1">&gt; a: The type of sending data is contiguous and derived type.
</span><br>
<span class="quotelev1">&gt; b: Either or both of MPI_LB and MPI_UB is used in the data type.
</span><br>
<span class="quotelev1">&gt; c: The size of sending data is smaller than extent(Data type has gap).
</span><br>
<span class="quotelev1">&gt; d: Send-count is bigger than 1.
</span><br>
<span class="quotelev1">&gt; e: Total size of data is bigger than &quot;eager limit&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem occurs in attachment C program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An incorrect-address accessing occurs
</span><br>
<span class="quotelev1">&gt; because an unintended value of &quot;done&quot; inputs and
</span><br>
<span class="quotelev1">&gt; the value of &quot;max_allowd&quot; becomes minus
</span><br>
<span class="quotelev1">&gt; in the following place in &quot;ompi/datatype/datatype_pack.c(in version 1.4.3)&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (ompi/datatype/datatype_pack.c)
</span><br>
<span class="quotelev1">&gt; 188             packed_buffer = (unsigned char *) iov[iov_count].iov_base;
</span><br>
<span class="quotelev1">&gt; 189             done = pConv-&gt;bConverted - i * pData-&gt;size;  /* partial data from last pack */
</span><br>
<span class="quotelev1">&gt; 190             if( done != 0 ) {  /* still some data to copy from the last time */
</span><br>
<span class="quotelev1">&gt; 191                 done = pData-&gt;size - done;
</span><br>
<span class="quotelev1">&gt; 192                 OMPI_DDT_SAFEGUARD_POINTER( user_memory, done, pConv-&gt;pBaseBuf, pData, pConv-&gt;count );
</span><br>
<span class="quotelev1">&gt; 193                 MEMCPY_CSUM( packed_buffer, user_memory, done, pConv );
</span><br>
<span class="quotelev1">&gt; 194                 packed_buffer += done;
</span><br>
<span class="quotelev1">&gt; 195                 max_allowed -= done;
</span><br>
<span class="quotelev1">&gt; 196                 total_bytes_converted += done;
</span><br>
<span class="quotelev1">&gt; 197                 user_memory += (extent - pData-&gt;size + done);
</span><br>
<span class="quotelev1">&gt; 198             }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This program assumes &quot;done&quot; as the size of partial data from last pack.
</span><br>
<span class="quotelev1">&gt; However, when the program crashes, &quot;done&quot; equals the sum of all transmitted data size.
</span><br>
<span class="quotelev1">&gt; It makes &quot;max_allowed&quot; to be a negative value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We modified the code as following and it passed our test suite.
</span><br>
<span class="quotelev1">&gt; But we are not sure this fix is correct. Can anyone review this fix?
</span><br>
<span class="quotelev1">&gt; Patch (against Open MPI 1.4 branch) is attached to this mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -            if( done != 0 ) {  /* still some data to copy from the last time */
</span><br>
<span class="quotelev1">&gt; +            if( (done + max_allowed) &gt;= pData-&gt;size ) {  /* still some data to copy from the last time */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2011/06/28 10:58), Takahiro Kawashima wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI community,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm a member of MPI library development team in Fujitsu. Shinji
</span><br>
<span class="quotelev2">&gt;&gt; Sumimoto, whose name appears in Jeff's blog, is one of our bosses.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As Rayson and Jeff noted, K computer, world's most powerful HPC system
</span><br>
<span class="quotelev2">&gt;&gt; developed by RIKEN and Fujitsu, utilizes Open MPI as a base of its MPI
</span><br>
<span class="quotelev2">&gt;&gt; library. We, Fujitsu, are pleased to announce that, and also have special
</span><br>
<span class="quotelev2">&gt;&gt; thanks to Open MPI community.
</span><br>
<span class="quotelev2">&gt;&gt; We are sorry to be late announce!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our MPI library is based on Open MPI 1.4 series, and has a new point-
</span><br>
<span class="quotelev2">&gt;&gt; to-point component (BTL) and new topology-aware collective communication
</span><br>
<span class="quotelev2">&gt;&gt; algorithms (COLL). Also, it is adapted to our runtime environment (ESS,
</span><br>
<span class="quotelev2">&gt;&gt; PLM, GRPCOMM etc).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; K computer connects 68,544 nodes by our custom interconnect.
</span><br>
<span class="quotelev2">&gt;&gt; Its runtime environment is our proprietary one. So we don't use orted.
</span><br>
<span class="quotelev2">&gt;&gt; We cannot tell start-up time yet because of disclosure restriction, sorry.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are surprised by the extensibility of Open MPI, and have proved that
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is scalable to 68,000 processes level! We feel pleasure to
</span><br>
<span class="quotelev2">&gt;&gt; utilize such a great open-source software.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We cannot tell detail of our technology yet because of our contract
</span><br>
<span class="quotelev2">&gt;&gt; with RIKEN AICS, however, we will plan to feedback of our improvements
</span><br>
<span class="quotelev2">&gt;&gt; and bug fixes. We can contribute some bug fixes soon, however, for
</span><br>
<span class="quotelev2">&gt;&gt; contribution of our improvements will be next year with Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; agreement.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI development team,
</span><br>
<span class="quotelev2">&gt;&gt; Fujitsu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got more information:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/">http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version: yes, Open MPI is used on K and was used to power the 8PF runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w00t!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 24, 2011, at 7:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; w00t!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI powers 8 petaflops!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (at least I'm guessing that -- does anyone know if that's true?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 24, 2011, at 7:03 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Interesting... page 11:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf">http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI based:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Open Standard, Open Source, Multi-Platform including PC Cluster.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Adding extension to Open MPI for &quot;Tofu&quot; interconnect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ub_lb.patch&gt;&lt;tp_lb_ub_ng.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9998.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="9996.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/09/11523.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/09/11523.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
