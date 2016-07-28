<?
$subject_val = "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 18:03:36 2014" -->
<!-- isoreceived="20140113230336" -->
<!-- sent="Tue, 14 Jan 2014 00:03:34 +0100" -->
<!-- isosent="20140113230334" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out" -->
<!-- id="39A0ADA7-17C1-4C2A-8608-B697420C22DB_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A764764B-EA35-46F9-8576-D7C7EFB7AA99_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 18:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13767.php">Jeff Squyres (jsquyres): "[OMPI devel] Webex info: MPI implementation requirements for a network layer"</a>
<li><strong>Previous message:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>In reply to:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I have misunderstood your question. I looked at what we have in the trunk, and with the exception of the datatype we&#146;re mostly good (a table of predefined types and their corresponding memory consumption is at the end of this email).
<br>
<p>So in the worst case if we increase the ompi_predefined_datatype_t to 1k, we will be using an extra 12k (similar to the MPI_Op today). In same time, I don&#146;t know of any plans to alter the current datatype engine implementation, nor any plans in the MPI forum to add more predefined types.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p>Here are the objects using this mechanism in the trunk right now:
<br>
<p>$ find . -name &quot;*.h&quot; -exec grep -Hn &quot;struct ompi_predefined_&quot; {} \;| grep &quot;{&quot; | awk -Fstruct '{print $2;}'| awk -F{ '{print $1;}'
<br>
&nbsp;ompi_predefined_communicator_t 
<br>
&nbsp;ompi_predefined_datatype_t 
<br>
&nbsp;ompi_predefined_errhandler_t 
<br>
&nbsp;ompi_predefined_file_t 
<br>
&nbsp;ompi_predefined_group_t 
<br>
&nbsp;ompi_predefined_info_t 
<br>
&nbsp;ompi_predefined_message_t 
<br>
&nbsp;ompi_predefined_op_t 
<br>
&nbsp;ompi_predefined_request_t 
<br>
&nbsp;ompi_predefined_win_t 
<br>
<p>More precisely:
<br>
<p>3 communicators (world, self, null)
<br>
25 datatype (&#133;)
<br>
4 error handlers (null, fatal, return, throw)
<br>
1 file (null)
<br>
1 group (null)
<br>
2 info (null, env)
<br>
1 message(no_proc)
<br>
14 op (&#133;)
<br>
1 request (null)
<br>
1 window (null)
<br>
<p>And here is the memory overhead per type:
<br>
<p>(lldb) p sizeof(ompi_predefined_datatype_t) - sizeof(ompi_datatype_t)
<br>
(unsigned long) $11 = 40
<br>
(lldb) p sizeof(ompi_predefined_errhandler_t) - sizeof(ompi_errhandler_t)
<br>
(unsigned long) $12 = 864
<br>
(lldb) p sizeof(ompi_predefined_file_t) - sizeof(ompi_file_t)
<br>
(unsigned long) $13 = 744
<br>
(lldb) p sizeof(ompi_predefined_group_t) - sizeof(ompi_group_t)
<br>
(unsigned long) $14 = 160
<br>
(lldb) p sizeof(ompi_predefined_info_t) - sizeof(ompi_info_t)
<br>
(unsigned long) $15 = 112
<br>
(lldb) p sizeof(ompi_predefined_message_t) - sizeof(ompi_message_t)
<br>
(unsigned long) $16 = 144
<br>
(lldb) p sizeof(ompi_predefined_op_t) - sizeof(ompi_op_t)
<br>
(unsigned long) $17 = 624
<br>
(lldb) p sizeof(ompi_predefined_request_t) - sizeof(ompi_request_t)
<br>
(unsigned long) $18 = 64
<br>
(lldb) p sizeof(ompi_predefined_win_t) - sizeof(ompi_win_t)
<br>
(unsigned long) $19 = 200
<br>
(lldb) p sizeof(ompi_predefined_communicator_t) - sizeof(ompi_communicator_t)
<br>
(unsigned long) $20 = 336
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 13, 2014, at 23:14 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, fair enough -- I can remove it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the question still remains: should we increase the size of the padding for the predefined datatypes?  The idea is that it would need to be big enough for the entire 1.9/1.10 (2.0?) series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2014, at 4:16 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code is well protected against such issues. If one of our base structures become larger than corresponding predefined structure, the compiler should trigger an error similar to:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../ompi/ompi/datatype/ompi_datatype_create_contiguous.c:23:0:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/ompi/datatype/ompi_datatype.h:105:10: error: size of array 'padding' is too large
</span><br>
<span class="quotelev2">&gt;&gt;    char padding[PREDEFINED_DATATYPE_PAD - sizeof(ompi_datatype_t)];
</span><br>
<span class="quotelev2">&gt;&gt;         ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is the case for all types that have a predefined enveloppe. Thus, the commit 30268 was unnecessary as the check was already included in the compilation by the inclusion of the ompi_debugger_canary.c.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2014, at 17:10 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed the following this morning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * sizeof(ompi_predefined_datatype_t): 512
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * sizeof(ompi_datatype_t): 488
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * padding left: 24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we need to increase the size of padding for predefined communicators for v1.9?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13767.php">Jeff Squyres (jsquyres): "[OMPI devel] Webex info: MPI implementation requirements for a network layer"</a>
<li><strong>Previous message:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>In reply to:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
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
