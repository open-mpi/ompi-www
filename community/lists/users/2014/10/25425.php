<?
$subject_val = "[OMPI users] About valgrind and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 07:40:21 2014" -->
<!-- isoreceived="20141002114021" -->
<!-- sent="Thu, 2 Oct 2014 21:40:21 +1000" -->
<!-- isosent="20141002114021" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="[OMPI users] About valgrind and OpenMPI" -->
<!-- id="CAKY4v996TTkBko2aDn+PvjmuUqqKeZUAxTfjye2t9R7F_xyV1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] About valgrind and OpenMPI<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 07:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25424.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I am using valgrind to help analyse my MPI program.
<br>
<p>I used hdfs file system to read/write data. And if I run the code without
<br>
valgrind, it works correctly. However, if I run with valgrind, for example,
<br>
<p>*mpirun -np 3 /usr/bin/valgrind --tool=callgrind  ./myprogram /input_file
<br>
/output_file*
<br>
<p>it returns with following information
<br>
<p>=========================================================
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>*Exception in thread &quot;main&quot; java.lang.InternalError: processing event:
<br>
535548453    at
<br>
com.sun.org.apache.xerces.internal.impl.XMLDocumentFragmentScannerImpl.scanDocument(XMLDocumentFragmentScannerImpl.java:506)
<br>
at
<br>
com.sun.org.apache.xerces.internal.parsers.XML11Configuration.parse(XML11Configuration.java:848)
<br>
at
<br>
com.sun.org.apache.xerces.internal.parsers.XML11Configuration.parse(XML11Configuration.java:777)
<br>
at
<br>
com.sun.org.apache.xerces.internal.parsers.XMLParser.parse(XMLParser.java:141)
<br>
at
<br>
com.sun.org.apache.xerces.internal.parsers.DOMParser.parse(DOMParser.java:243)
<br>
at
<br>
com.sun.org.apache.xerces.internal.jaxp.DocumentBuilderImpl.parse(DocumentBuilderImpl.java:347)
<br>
at javax.xml.parsers.DocumentBuilder.parse(DocumentBuilder.java:177)    at
<br>
org.apache.hadoop.conf.Configuration.loadResource(Configuration.java:1156)
<br>
at
<br>
org.apache.hadoop.conf.Configuration.loadResources(Configuration.java:1107)
<br>
at
<br>
org.apache.hadoop.conf.Configuration.getProps(Configuration.java:1053)
<br>
at org.apache.hadoop.conf.Configuration.get(Configuration.java:397)    at
<br>
org.apache.hadoop.conf.Configuration.getBoolean(Configuration.java:594)
<br>
at
<br>
org.apache.hadoop.security.SecurityUtil.&lt;clinit&gt;(SecurityUtil.java:67)
<br>
at org.apache.hadoop.net.NetUtils.makeSocketAddr(NetUtils.java:188)    at
<br>
org.apache.hadoop.net.NetUtils.createSocketAddr(NetUtils.java:168)    at
<br>
org.apache.hadoop.hdfs.server.namenode.NameNode.getAddress(NameNode.java:212)
<br>
at
<br>
org.apache.hadoop.hdfs.DistributedFileSystem.initialize(DistributedFileSystem.java:99)
<br>
at
<br>
org.apache.hadoop.fs.FileSystem.createFileSystem(FileSystem.java:1446)
<br>
at org.apache.hadoop.fs.FileSystem.access$200(FileSystem.java:67)    at
<br>
org.apache.hadoop.fs.FileSystem$Cache.get(FileSystem.java:1464)    at
<br>
org.apache.hadoop.fs.FileSystem.get(FileSystem.java:263)    at
<br>
org.apache.hadoop.fs.FileSystem$1.run(FileSystem.java:118)    at
<br>
org.apache.hadoop.fs.FileSystem$1.run(FileSystem.java:116)    at
<br>
java.security.AccessController.doPrivileged(Native Method)    at
<br>
javax.security.auth.Subject.doAs(Subject.java:415)    at
<br>
org.apache.hadoop.security.UserGroupInformation.doAs(UserGroupInformation.java:1190)
<br>
at org.apache.hadoop.fs.FileSystem.get(FileSystem.java:116)Call to
<br>
org.apache.hadoop.fs.Filesystem::get(URI, Configuration) failed!*
<br>
<p>=========================================================
<br>
<p>By debugging, I found that the exception happens in hdfsConnect(). But I
<br>
don't how to fix it. Could anyone give me some advice, please?
<br>
<p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25424.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
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
