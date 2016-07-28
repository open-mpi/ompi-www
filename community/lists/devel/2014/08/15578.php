<?
$subject_val = "Re: [OMPI devel] [v1.8] java bindings build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 00:55:22 2014" -->
<!-- isoreceived="20140809045522" -->
<!-- sent="Fri, 8 Aug 2014 21:55:21 -0700" -->
<!-- isosent="20140809045521" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v1.8] java bindings build failure" -->
<!-- id="CAAvDA15QhBP8XiS47jku4Dqw=5jb4Qsvn+K_c+DTuQAeSY2h6w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0F57CC7D-2DFD-478C-8633-EA5623BA10A7_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 00:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Previous message:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>In reply to:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>/usr/java/jdk1.6.0_21
<br>
<p>-Paul
<br>
<p><p>On Fri, Aug 8, 2014 at 9:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This seems odd - I'm not seeing any warnings or errors when building Java.
</span><br>
<span class="quotelev1">&gt; Which JDK version do you have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2014, at 9:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below are errors from trying tonight's v1.8 tarball on one of the few
</span><br>
<span class="quotelev1">&gt; systems I have access to with java.  The trunk has the same errors but with
</span><br>
<span class="quotelev1">&gt; all the line numbers increased by exactly 18.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in java
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-1.8-latest-linux-x86_64-java/BLD/ompi/mpi/java/java'
</span><br>
<span class="quotelev1">&gt;   JAVAC  MPI.class
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:92:
</span><br>
<span class="quotelev1">&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev1">&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return newData(buffer, 0);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:107:
</span><br>
<span class="quotelev1">&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev1">&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return newData(buffer, index * extent);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:120:
</span><br>
<span class="quotelev1">&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev1">&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return getData(buffer);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:136:
</span><br>
<span class="quotelev1">&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev1">&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;     return getData(buffer, index);
</span><br>
<span class="quotelev1">&gt;                   ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:722:
</span><br>
<span class="quotelev1">&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev1">&gt; exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev1">&gt;         return s.newData(buffer, offset + field);
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:737:
</span><br>
<span class="quotelev1">&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev1">&gt; exists for type variable T with upper bounds D,mpi.Struct.Data
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15575.php">http://www.open-mpi.org/community/lists/devel/2014/08/15575.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15577.php">http://www.open-mpi.org/community/lists/devel/2014/08/15577.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15579.php">Mike Dubman: "Re: [OMPI devel] jenkins error in trunk"</a>
<li><strong>Previous message:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>In reply to:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15581.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
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
