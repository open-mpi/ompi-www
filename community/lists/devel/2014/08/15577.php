<?
$subject_val = "Re: [OMPI devel] [v1.8] java bindings build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 00:52:13 2014" -->
<!-- isoreceived="20140809045213" -->
<!-- sent="Fri, 8 Aug 2014 21:51:38 -0700" -->
<!-- isosent="20140809045138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v1.8] java bindings build failure" -->
<!-- id="0F57CC7D-2DFD-478C-8633-EA5623BA10A7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA1771Vzu+g7792rXZd1f1Afba+dS6ccCsOxpxdm65crmLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v1.8] java bindings build failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 00:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Previous message:</strong> <a href="15576.php">Paul Hargrove: "[OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>In reply to:</strong> <a href="15575.php">Paul Hargrove: "[OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This seems odd - I'm not seeing any warnings or errors when building Java. Which JDK version do you have?
<br>
<p>On Aug 8, 2014, at 9:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Below are errors from trying tonight's v1.8 tarball on one of the few systems I have access to with java.  The trunk has the same errors but with all the line numbers increased by exactly 18.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in java
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/brashear/hargrove/OMPI/openmpi-1.8-latest-linux-x86_64-java/BLD/ompi/mpi/java/java'
</span><br>
<span class="quotelev1">&gt;   JAVAC  MPI.class
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:92: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return newData(buffer, 0);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:107: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return newData(buffer, index * extent);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:120: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return getData(buffer);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:136: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return getData(buffer, index);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:722: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;         return s.newData(buffer, offset + field);
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:737: type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;         return s.newData(buffer, offset + field + index * s.extent);
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; 6 errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15575.php">http://www.open-mpi.org/community/lists/devel/2014/08/15575.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15577/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Previous message:</strong> <a href="15576.php">Paul Hargrove: "[OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>In reply to:</strong> <a href="15575.php">Paul Hargrove: "[OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
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
