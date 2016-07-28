<?
$subject_val = "Re: [OMPI devel] [v1.8] java bindings build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 02:01:22 2014" -->
<!-- isoreceived="20140809060122" -->
<!-- sent="Fri, 8 Aug 2014 23:00:56 -0700" -->
<!-- isosent="20140809060056" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v1.8] java bindings build failure" -->
<!-- id="CAAvDA14M47EcG9X0+R2jJ5S8oFXd76ONQ5oKwTjmJ4TvqPeBRA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15QhBP8XiS47jku4Dqw=5jb4Qsvn+K_c+DTuQAeSY2h6w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-09 02:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15582.php">Paul Hargrove: "[OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Previous message:</strong> <a href="15580.php">Mike Dubman: "[OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>In reply to:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15589.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15589.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried /usr/java/jdk1.6.0_45 and things are fine now.
<br>
I honestly don't know if this was an Open MPI issue or a broken Java
<br>
installation.
<br>
<p>-Paul
<br>
<p><p>On Fri, Aug 8, 2014 at 9:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/java/jdk1.6.0_21
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 8, 2014 at 9:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems odd - I'm not seeing any warnings or errors when building
</span><br>
<span class="quotelev2">&gt;&gt; Java. Which JDK version do you have?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 8, 2014, at 9:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below are errors from trying tonight's v1.8 tarball on one of the few
</span><br>
<span class="quotelev2">&gt;&gt; systems I have access to with java.  The trunk has the same errors but with
</span><br>
<span class="quotelev2">&gt;&gt; all the line numbers increased by exactly 18.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in java
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/brashear/hargrove/OMPI/openmpi-1.8-latest-linux-x86_64-java/BLD/ompi/mpi/java/java'
</span><br>
<span class="quotelev2">&gt;&gt;   JAVAC  MPI.class
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:92:
</span><br>
<span class="quotelev2">&gt;&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev2">&gt;&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev2">&gt;&gt;     return newData(buffer, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:107:
</span><br>
<span class="quotelev2">&gt;&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev2">&gt;&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev2">&gt;&gt;     return newData(buffer, index * extent);
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:120:
</span><br>
<span class="quotelev2">&gt;&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev2">&gt;&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev2">&gt;&gt;     return getData(buffer);
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:136:
</span><br>
<span class="quotelev2">&gt;&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev2">&gt;&gt; exists for type variable T with upper bounds T,mpi.Struct.Data
</span><br>
<span class="quotelev2">&gt;&gt;     return getData(buffer, index);
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:722:
</span><br>
<span class="quotelev2">&gt;&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev2">&gt;&gt; exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev2">&gt;&gt;         return s.newData(buffer, offset + field);
</span><br>
<span class="quotelev2">&gt;&gt;                         ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:737:
</span><br>
<span class="quotelev2">&gt;&gt; type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
</span><br>
<span class="quotelev2">&gt;&gt; exists for type variable T with upper bounds D,mpi.Struct.Data
</span><br>
<span class="quotelev2">&gt;&gt;         return s.newData(buffer, offset + field + index * s.extent);
</span><br>
<span class="quotelev2">&gt;&gt;                         ^
</span><br>
<span class="quotelev2">&gt;&gt; 6 errors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15575.php">http://www.open-mpi.org/community/lists/devel/2014/08/15575.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15577.php">http://www.open-mpi.org/community/lists/devel/2014/08/15577.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15582.php">Paul Hargrove: "[OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<li><strong>Previous message:</strong> <a href="15580.php">Mike Dubman: "[OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>In reply to:</strong> <a href="15578.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15589.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15589.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
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
