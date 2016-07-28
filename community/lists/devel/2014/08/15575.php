<?
$subject_val = "[OMPI devel] [v1.8] java bindings build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 00:31:38 2014" -->
<!-- isoreceived="20140809043138" -->
<!-- sent="Fri, 8 Aug 2014 21:31:37 -0700" -->
<!-- isosent="20140809043137" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v1.8] java bindings build failure" -->
<!-- id="CAAvDA1771Vzu+g7792rXZd1f1Afba+dS6ccCsOxpxdm65crmLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [v1.8] java bindings build failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 00:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15576.php">Paul Hargrove: "[OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>Previous message:</strong> <a href="15574.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below are errors from trying tonight's v1.8 tarball on one of the few
<br>
systems I have access to with java.  The trunk has the same errors but with
<br>
all the line numbers increased by exactly 18.
<br>
<p>-Paul
<br>
<p>Making all in java
<br>
make[3]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-1.8-latest-linux-x86_64-java/BLD/ompi/mpi/java/java'
<br>
&nbsp;&nbsp;JAVAC  MPI.class
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:92:
<br>
type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
<br>
exists for type variable T with upper bounds T,mpi.Struct.Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return newData(buffer, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:107:
<br>
type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
<br>
exists for type variable T with upper bounds T,mpi.Struct.Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return newData(buffer, index * extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:120:
<br>
type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
<br>
exists for type variable T with upper bounds T,mpi.Struct.Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return getData(buffer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:136:
<br>
type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
<br>
exists for type variable T with upper bounds T,mpi.Struct.Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return getData(buffer, index);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:722:
<br>
type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
<br>
exists for type variable T with upper bounds D,mpi.Struct.Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return s.newData(buffer, offset + field);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.8-latest-linux-x86_64-java/openmpi-1.8.2rc4r32480/ompi/mpi/java/java/Struct.java:737:
<br>
type parameters of &lt;T&gt;T cannot be determined; no unique maximal instance
<br>
exists for type variable T with upper bounds D,mpi.Struct.Data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return s.newData(buffer, offset + field + index * s.extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
6 errors
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15575/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15576.php">Paul Hargrove: "[OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>Previous message:</strong> <a href="15574.php">Paul Hargrove: "Re: [OMPI devel] v1.8.2 still held up..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Reply:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
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
