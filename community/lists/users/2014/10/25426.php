<?
$subject_val = "Re: [OMPI users] About valgrind and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 10:14:23 2014" -->
<!-- isoreceived="20141002141423" -->
<!-- sent="Thu, 2 Oct 2014 07:14:19 -0700" -->
<!-- isosent="20141002141419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About valgrind and OpenMPI" -->
<!-- id="89B9FCE0-757E-40F7-AB73-97063C3E098B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKY4v996TTkBko2aDn+PvjmuUqqKeZUAxTfjye2t9R7F_xyV1A_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 10:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25427.php">Diego Avesani: "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25425.php">XingFENG: "[OMPI users] About valgrind and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="25425.php">XingFENG: "[OMPI users] About valgrind and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....I would guess you should talk to the Hadoop folks as the problem seems to be a conflict between valgrind and HDFS. Does valgrind even support Java programs? I honestly have never tried to do that before.
<br>
<p><p>On Oct 2, 2014, at 4:40 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using valgrind to help analyse my MPI program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used hdfs file system to read/write data. And if I run the code without valgrind, it works correctly. However, if I run with valgrind, for example, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 /usr/bin/valgrind --tool=callgrind  ./myprogram /input_file /output_file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it returns with following information
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.InternalError: processing event: 535548453
</span><br>
<span class="quotelev1">&gt;     at com.sun.org.apache.xerces.internal.impl.XMLDocumentFragmentScannerImpl.scanDocument(XMLDocumentFragmentScannerImpl.java:506)
</span><br>
<span class="quotelev1">&gt;     at com.sun.org.apache.xerces.internal.parsers.XML11Configuration.parse(XML11Configuration.java:848)
</span><br>
<span class="quotelev1">&gt;     at com.sun.org.apache.xerces.internal.parsers.XML11Configuration.parse(XML11Configuration.java:777)
</span><br>
<span class="quotelev1">&gt;     at com.sun.org.apache.xerces.internal.parsers.XMLParser.parse(XMLParser.java:141)
</span><br>
<span class="quotelev1">&gt;     at com.sun.org.apache.xerces.internal.parsers.DOMParser.parse(DOMParser.java:243)
</span><br>
<span class="quotelev1">&gt;     at com.sun.org.apache.xerces.internal.jaxp.DocumentBuilderImpl.parse(DocumentBuilderImpl.java:347)
</span><br>
<span class="quotelev1">&gt;     at javax.xml.parsers.DocumentBuilder.parse(DocumentBuilder.java:177)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.conf.Configuration.loadResource(Configuration.java:1156)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.conf.Configuration.loadResources(Configuration.java:1107)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.conf.Configuration.getProps(Configuration.java:1053)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.conf.Configuration.get(Configuration.java:397)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.conf.Configuration.getBoolean(Configuration.java:594)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.security.SecurityUtil.&lt;clinit&gt;(SecurityUtil.java:67)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.net.NetUtils.makeSocketAddr(NetUtils.java:188)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.net.NetUtils.createSocketAddr(NetUtils.java:168)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.hdfs.server.namenode.NameNode.getAddress(NameNode.java:212)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.hdfs.DistributedFileSystem.initialize(DistributedFileSystem.java:99)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem.createFileSystem(FileSystem.java:1446)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem.access$200(FileSystem.java:67)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem$Cache.get(FileSystem.java:1464)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem.get(FileSystem.java:263)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem$1.run(FileSystem.java:118)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem$1.run(FileSystem.java:116)
</span><br>
<span class="quotelev1">&gt;     at java.security.AccessController.doPrivileged(Native Method)
</span><br>
<span class="quotelev1">&gt;     at javax.security.auth.Subject.doAs(Subject.java:415)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.security.UserGroupInformation.doAs(UserGroupInformation.java:1190)
</span><br>
<span class="quotelev1">&gt;     at org.apache.hadoop.fs.FileSystem.get(FileSystem.java:116)
</span><br>
<span class="quotelev1">&gt; Call to org.apache.hadoop.fs.Filesystem::get(URI, Configuration) failed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By debugging, I found that the exception happens in hdfsConnect(). But I don't how to fix it. Could anyone give me some advice, please?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25425.php">http://www.open-mpi.org/community/lists/users/2014/10/25425.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25427.php">Diego Avesani: "[OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25425.php">XingFENG: "[OMPI users] About valgrind and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="25425.php">XingFENG: "[OMPI users] About valgrind and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25431.php">XingFENG: "Re: [OMPI users] About valgrind and OpenMPI"</a>
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
