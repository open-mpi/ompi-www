<?
$subject_val = "Re: [OMPI users] About valgrind and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 19:46:31 2014" -->
<!-- isoreceived="20141002234631" -->
<!-- sent="Fri, 3 Oct 2014 09:46:31 +1000" -->
<!-- isosent="20141002234631" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About valgrind and OpenMPI" -->
<!-- id="CAKY4v99UNXKhjmmanPfmSvX=Wtmx8Gi84qBQ4hnJiJNV1M7JfQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="89B9FCE0-757E-40F7-AB73-97063C3E098B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] About valgrind and OpenMPI<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 19:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph Castain,
<br>
<p>Thanks very much for your reply. I am using libhdfs, a C API to HDFS. I
<br>
would ask hadoop guys for help.
<br>
<p>On Fri, Oct 3, 2014 at 12:14 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm....I would guess you should talk to the Hadoop folks as the problem
</span><br>
<span class="quotelev1">&gt; seems to be a conflict between valgrind and HDFS. Does valgrind even
</span><br>
<span class="quotelev1">&gt; support Java programs? I honestly have never tried to do that before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2014, at 4:40 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using valgrind to help analyse my MPI program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used hdfs file system to read/write data. And if I run the code without
</span><br>
<span class="quotelev1">&gt; valgrind, it works correctly. However, if I run with valgrind, for example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpirun -np 3 /usr/bin/valgrind --tool=callgrind  ./myprogram /input_file
</span><br>
<span class="quotelev1">&gt; /output_file*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it returns with following information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Exception in thread &quot;main&quot; java.lang.InternalError: processing event:
</span><br>
<span class="quotelev1">&gt; 535548453    at
</span><br>
<span class="quotelev1">&gt; com.sun.org.apache.xerces.internal.impl.XMLDocumentFragmentScannerImpl.scanDocument(XMLDocumentFragmentScannerImpl.java:506)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; com.sun.org.apache.xerces.internal.parsers.XML11Configuration.parse(XML11Configuration.java:848)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; com.sun.org.apache.xerces.internal.parsers.XML11Configuration.parse(XML11Configuration.java:777)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; com.sun.org.apache.xerces.internal.parsers.XMLParser.parse(XMLParser.java:141)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; com.sun.org.apache.xerces.internal.parsers.DOMParser.parse(DOMParser.java:243)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; com.sun.org.apache.xerces.internal.jaxp.DocumentBuilderImpl.parse(DocumentBuilderImpl.java:347)
</span><br>
<span class="quotelev1">&gt; at javax.xml.parsers.DocumentBuilder.parse(DocumentBuilder.java:177)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.conf.Configuration.loadResource(Configuration.java:1156)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.conf.Configuration.loadResources(Configuration.java:1107)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.conf.Configuration.getProps(Configuration.java:1053)
</span><br>
<span class="quotelev1">&gt; at org.apache.hadoop.conf.Configuration.get(Configuration.java:397)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.conf.Configuration.getBoolean(Configuration.java:594)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.security.SecurityUtil.&lt;clinit&gt;(SecurityUtil.java:67)
</span><br>
<span class="quotelev1">&gt; at org.apache.hadoop.net.NetUtils.makeSocketAddr(NetUtils.java:188)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.net.NetUtils.createSocketAddr(NetUtils.java:168)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.hdfs.server.namenode.NameNode.getAddress(NameNode.java:212)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.hdfs.DistributedFileSystem.initialize(DistributedFileSystem.java:99)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.fs.FileSystem.createFileSystem(FileSystem.java:1446)
</span><br>
<span class="quotelev1">&gt; at org.apache.hadoop.fs.FileSystem.access$200(FileSystem.java:67)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.fs.FileSystem$Cache.get(FileSystem.java:1464)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.fs.FileSystem.get(FileSystem.java:263)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.fs.FileSystem$1.run(FileSystem.java:118)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.fs.FileSystem$1.run(FileSystem.java:116)    at
</span><br>
<span class="quotelev1">&gt; java.security.AccessController.doPrivileged(Native Method)    at
</span><br>
<span class="quotelev1">&gt; javax.security.auth.Subject.doAs(Subject.java:415)    at
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.security.UserGroupInformation.doAs(UserGroupInformation.java:1190)
</span><br>
<span class="quotelev1">&gt; at org.apache.hadoop.fs.FileSystem.get(FileSystem.java:116)Call to
</span><br>
<span class="quotelev1">&gt; org.apache.hadoop.fs.Filesystem::get(URI, Configuration) failed!*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By debugging, I found that the exception happens in hdfsConnect(). But I
</span><br>
<span class="quotelev1">&gt; don't how to fix it. Could anyone give me some advice, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25425.php">http://www.open-mpi.org/community/lists/users/2014/10/25425.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25426.php">http://www.open-mpi.org/community/lists/users/2014/10/25426.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25430.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>In reply to:</strong> <a href="25426.php">Ralph Castain: "Re: [OMPI users] About valgrind and OpenMPI"</a>
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
