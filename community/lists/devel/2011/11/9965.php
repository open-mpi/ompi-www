<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 05:28:13 2011" -->
<!-- isoreceived="20111114102813" -->
<!-- sent="Mon, 14 Nov 2011 19:27:42 +0900" -->
<!-- isosent="20111114102742" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="4EC0ED1E.7010200_at_jp.fujitsu.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87sjquu36z.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 05:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9966.php">Ralph Castain: "[OMPI devel] VT issue"</a>
<li><strong>Previous message:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9434.php">Takahiro Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9997.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI community,
<br>
<p>I'm a member of MPI library development team in Fujitsu,
<br>
Takahiro Kawashima, who sent mail before, is my colleague.
<br>
We start to feed back.
<br>
<p>First, we fixed about MPI_LB/MPI_UB and data packing problem.
<br>
<p>Program crashes when it meets all of the following conditions:
<br>
a: The type of sending data is contiguous and derived type.
<br>
b: Either or both of MPI_LB and MPI_UB is used in the data type.
<br>
c: The size of sending data is smaller than extent(Data type has gap).
<br>
d: Send-count is bigger than 1.
<br>
e: Total size of data is bigger than &quot;eager limit&quot;
<br>
<p>This problem occurs in attachment C program.
<br>
<p>An incorrect-address accessing occurs
<br>
because an unintended value of &quot;done&quot; inputs and
<br>
the value of &quot;max_allowd&quot; becomes minus
<br>
in the following place in &quot;ompi/datatype/datatype_pack.c(in version 1.4.3)&quot;.
<br>
<p><p>(ompi/datatype/datatype_pack.c)
<br>
188             packed_buffer = (unsigned char *) iov[iov_count].iov_base;
<br>
189             done = pConv-&gt;bConverted - i * pData-&gt;size;  /* partial data from last pack */
<br>
190             if( done != 0 ) {  /* still some data to copy from the last time */
<br>
191                 done = pData-&gt;size - done;
<br>
192                 OMPI_DDT_SAFEGUARD_POINTER( user_memory, done, pConv-&gt;pBaseBuf, pData, pConv-&gt;count );
<br>
193                 MEMCPY_CSUM( packed_buffer, user_memory, done, pConv );
<br>
194                 packed_buffer += done;
<br>
195                 max_allowed -= done;
<br>
196                 total_bytes_converted += done;
<br>
197                 user_memory += (extent - pData-&gt;size + done);
<br>
198             }
<br>
<p>This program assumes &quot;done&quot; as the size of partial data from last pack.
<br>
However, when the program crashes, &quot;done&quot; equals the sum of all transmitted data size.
<br>
It makes &quot;max_allowed&quot; to be a negative value.
<br>
<p>We modified the code as following and it passed our test suite.
<br>
But we are not sure this fix is correct. Can anyone review this fix?
<br>
Patch (against Open MPI 1.4 branch) is attached to this mail.
<br>
<p>-            if( done != 0 ) {  /* still some data to copy from the last time */
<br>
+            if( (done + max_allowed) &gt;= pData-&gt;size ) {  /* still some data to copy from the last time */
<br>
<p>Best regards,
<br>
<p>Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>(2011/06/28 10:58), Takahiro Kawashima wrote:
<br>
<span class="quotelev1">&gt; Dear Open MPI community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a member of MPI library development team in Fujitsu. Shinji
</span><br>
<span class="quotelev1">&gt; Sumimoto, whose name appears in Jeff's blog, is one of our bosses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Rayson and Jeff noted, K computer, world's most powerful HPC system
</span><br>
<span class="quotelev1">&gt; developed by RIKEN and Fujitsu, utilizes Open MPI as a base of its MPI
</span><br>
<span class="quotelev1">&gt; library. We, Fujitsu, are pleased to announce that, and also have special
</span><br>
<span class="quotelev1">&gt; thanks to Open MPI community.
</span><br>
<span class="quotelev1">&gt; We are sorry to be late announce!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our MPI library is based on Open MPI 1.4 series, and has a new point-
</span><br>
<span class="quotelev1">&gt; to-point component (BTL) and new topology-aware collective communication
</span><br>
<span class="quotelev1">&gt; algorithms (COLL). Also, it is adapted to our runtime environment (ESS,
</span><br>
<span class="quotelev1">&gt; PLM, GRPCOMM etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; K computer connects 68,544 nodes by our custom interconnect.
</span><br>
<span class="quotelev1">&gt; Its runtime environment is our proprietary one. So we don't use orted.
</span><br>
<span class="quotelev1">&gt; We cannot tell start-up time yet because of disclosure restriction, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are surprised by the extensibility of Open MPI, and have proved that
</span><br>
<span class="quotelev1">&gt; Open MPI is scalable to 68,000 processes level! We feel pleasure to
</span><br>
<span class="quotelev1">&gt; utilize such a great open-source software.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We cannot tell detail of our technology yet because of our contract
</span><br>
<span class="quotelev1">&gt; with RIKEN AICS, however, we will plan to feedback of our improvements
</span><br>
<span class="quotelev1">&gt; and bug fixes. We can contribute some bug fixes soon, however, for
</span><br>
<span class="quotelev1">&gt; contribution of our improvements will be next year with Open MPI
</span><br>
<span class="quotelev1">&gt; agreement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got more information:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/">http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short version: yes, Open MPI is used on K and was used to power the 8PF runs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; w00t!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 24, 2011, at 7:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w00t!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI powers 8 petaflops!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (at least I'm guessing that -- does anyone know if that's true?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 24, 2011, at 7:03 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interesting... page 11:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf">http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI based:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Open Standard, Open Source, Multi-Platform including PC Cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Adding extension to Open MPI for &quot;Tofu&quot; interconnect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9965/ub_lb.patch">ub_lb.patch</a>
</ul>
<!-- attachment="ub_lb.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9965/tp_lb_ub_ng.c">tp_lb_ub_ng.c</a>
</ul>
<!-- attachment="tp_lb_ub_ng.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9966.php">Ralph Castain: "[OMPI devel] VT issue"</a>
<li><strong>Previous message:</strong> <a href="9964.php">Barrett, Brian W: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9434.php">Takahiro Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9997.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
