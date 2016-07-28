<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 21:36:15 2010" -->
<!-- isoreceived="20101125023615" -->
<!-- sent="Wed, 24 Nov 2010 21:33:52 -0500" -->
<!-- isosent="20101125023352" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="Sebastien.Boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="1290652432.2539.43.camel_at_godzilla" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="04FB949B-23E8-468E-AC32-A39A194F8A70_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>Sebastien.Boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 21:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8722.php">Doron Shoham: "[OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Previous message:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8710.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Tue, 2010-11-23 at 18:03 -0500, George Bosilca wrote: 
<br>
<span class="quotelev1">&gt; If you know the max size of the receives I would take a different approach. Post few persistent receives, and manage them in a circular buffer. Instead of doing an MPI_Iprobe, use MPI_Test on the current head of your circular buffer. Once you use the data related to the receive, just do an MPI_Start on your request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I implemented your approach, and I must say IT IS FASTER !
<br>
My ring has 128 bins. I guess that qualifies as a 'few'.
<br>
<p><p>Here are my tests:
<br>
* Open-MPI 1.4.3
<br>
* Infiniband QDR/full bisection topology
<br>
* 32 MPI ranks (Intel(R) Xeon(R) CPU           X5560  @ 2.80GHz)
<br>
* g++ (GCC) 4.1.2 20080704 (Red Hat 4.1.2-46)
<br>
* Ray 1.0.0-RC1
<br>
* colosse <a href="http://www.top500.org/system/10195">http://www.top500.org/system/10195</a>
<br>
<p><p>with MPI_Iprobe/MPI_Recv (old, r4023)
<br>
<p><p>[sboisver12_at_colosse2 SRA001125]$ cat qsub-openmpi-r4023.sh
<br>
#!/bin/bash
<br>
#$ -N iprobe
<br>
#$ -P nne-790-aa
<br>
#$ -l h_rt=0:40:00
<br>
#$ -pe mpi 32
<br>
#$ -M sebastien.boisvert.3@
<br>
#$ -m bea
<br>
module load compilers/gcc/4.4.2 mpi/openmpi/1.4.3_gcc
<br>
/software/MPI/openmpi-1.4.3_gcc/bin/mpirun /home/sboisver12/r4023/code/Ray  \
<br>
-p /home/sboisver12/nne-790-aa/SRA001125/SRR001665_1.fastq.gz /home/sboisver12/nne-790-aa/SRA001125/SRR001665_2.fastq.gz \
<br>
-p /home/sboisver12/nne-790-aa/SRA001125/SRR001666_1.fastq.gz /home/sboisver12/nne-790-aa/SRA001125/SRR001666_2.fastq.gz \
<br>
-o Ecoli-THEONE
<br>
<p><p><p>&nbsp;Beginning of computation: 1 seconds
<br>
&nbsp;Distribution of sequence reads: 7 minutes, 48 seconds
<br>
&nbsp;Distribution of vertices: 1 minutes, 36 seconds
<br>
&nbsp;Calculation of coverage distribution: 0 seconds
<br>
&nbsp;Distribution of edges: 2 minutes, 19 seconds
<br>
&nbsp;Indexing of sequence reads: 5 seconds
<br>
&nbsp;Computation of seeds: 3 minutes, 40 seconds
<br>
&nbsp;Computation of library sizes: 1 minutes, 37 seconds
<br>
&nbsp;Extension of seeds: 4 minutes, 41 seconds
<br>
&nbsp;Computation of fusions: 1 minutes, 16 seconds
<br>
&nbsp;Collection of fusions: 0 seconds
<br>
&nbsp;Completion of the assembly: 23 minutes, 3 seconds
<br>
<p><p><p><p>with MPI_Recv_init/MPI_Start (new, HEAD)
<br>
<p><p><p><p>[sboisver12_at_colosse2 SRA001125]$ qsub qsub-openmpi-r4023.sh
<br>
Your job 1031990 (&quot;iprobe&quot;) has been submitted
<br>
[sboisver12_at_colosse2 SRA001125]$ cat qsub-openmpi.sh
<br>
#!/bin/bash
<br>
#$ -N persistent
<br>
#$ -P nne-790-aa
<br>
#$ -l h_rt=0:40:00
<br>
#$ -pe mpi 32
<br>
#$ -M sebastien.boisvert.3@
<br>
#$ -m bea
<br>
module load compilers/gcc/4.4.2 mpi/openmpi/1.4.3_gcc
<br>
/software/MPI/openmpi-1.4.3_gcc/bin/mpirun /home/sboisver12/Ray/trunk/code/Ray  \
<br>
-p /home/sboisver12/nne-790-aa/SRA001125/SRR001665_1.fastq.gz /home/sboisver12/nne-790-aa/SRA001125/SRR001665_2.fastq.gz \
<br>
-p /home/sboisver12/nne-790-aa/SRA001125/SRR001666_1.fastq.gz /home/sboisver12/nne-790-aa/SRA001125/SRR001666_2.fastq.gz \
<br>
-o Ecoli-THEONE
<br>
<p><p>&nbsp;Beginning of computation: 1 seconds
<br>
&nbsp;Distribution of sequence reads: 7 minutes, 22 seconds
<br>
&nbsp;Distribution of vertices: 1 minutes, 28 seconds
<br>
&nbsp;Calculation of coverage distribution: 1 seconds
<br>
&nbsp;Distribution of edges: 2 minutes, 14 seconds
<br>
&nbsp;Indexing of sequence reads: 5 seconds
<br>
&nbsp;Computation of seeds: 2 minutes, 41 seconds
<br>
&nbsp;Computation of library sizes: 1 minutes, 14 seconds
<br>
&nbsp;Extension of seeds: 3 minutes, 47 seconds
<br>
&nbsp;Computation of fusions: 1 minutes, 0 seconds
<br>
&nbsp;Collection of fusions: 1 seconds
<br>
&nbsp;Completion of the assembly: 19 minutes, 54 seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>So:
<br>
<p>The MPI_Iprobe approach: 
<br>
<p>23 minutes, 3 seconds
<br>
<p><p>The persistent approach proposed by George Bosilca:
<br>
<p>19 minutes, 54 seconds
<br>
<p><p><span class="quotelev1">&gt; This approach will minimize the unexpected messages, and drain the connections faster. Moreover, at the end it is very easy to MPI_Cancel all the receives not yet matched.
</span><br>
<p>I see.
<br>
<p><span class="quotelev1">&gt;   george.
</span><br>
<p>Thank you !
<br>
<p>p.s.: I learned a lot on MPI since my first post here !
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2010, at 17:43 , S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Le mardi 23 novembre 2010 &#195;&#160; 17:38 -0500, George Bosilca a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The eager size reported by ompi_info includes the Open MPI internal headers. They are anywhere between 20 and 64 bytes long (potentially more for some particular networks), so what Eugene suggested was a safe boundary.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Moreover, eager send can improve performance if and only if the matching receives are already posted on the peer. If not, the data will become unexpected, and there will be one additional memcpy.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So it won't improve performance in my application (Ray,
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://denovoassembler.sf.net">http://denovoassembler.sf.net</a>) because I use MPI_Iprobe to check for
</span><br>
<span class="quotelev2">&gt; &gt; incoming messages, which means any receive (MPI_Recv) is never posted
</span><br>
<span class="quotelev2">&gt; &gt; before any send (MPI_Isend).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, this thread is very informative for me !
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 23, 2010, at 17:29 , S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Le mardi 23 novembre 2010 &#195;&#160; 16:07 -0500, Eugene Loh a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; S&#195;&#169;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Now I can describe the cases.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The test cases can all be explained by the test requiring eager messages 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (something that test4096.cpp does not require).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Case 1: 30 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; File: mpirun-np-30-Program-4096.txt
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 4096 is rendezvous.  For eager, try 4000 or lower.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; According to ompi_info, the threshold is 4096, not 4000, right ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (Open-MPI 1.4.3)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [sboisver12_at_colosse1 ~]$ ompi_info -a|less
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         Maximum size (in bytes) of &quot;short&quot; messages
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (must be &gt;= 1).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;btl_sm_eager_limit: Below this size, messages are sent &quot;eagerly&quot; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that is, a sender attempts to write its entire message to shared buffers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; without waiting for a receiver to be ready. Above this size, a sender
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; will only write the first part of a message, then wait for the receiver
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to acknowledge its ready before continuing. Eager sends can improve
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; performance by decoupling senders from receivers.&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; source:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=sm#more-sm">http://www.open-mpi.org/faq/?category=sm#more-sm</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It should say &quot;Below this size or equal to this size&quot; instead of &quot;Below
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; this size&quot; as ompi_info says. ;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As Mr. George Bosilca put it:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;__should__ is not correct, __might__ is a better verb to describe the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; most &quot;common&quot; behavior for small messages. The problem comes from the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fact that in each communicator the FIFO ordering is required by the MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; standard. As soon as there is any congestion, MPI_Send will block even
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for small messages (and this independent on the underlying network)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; until all he pending packets have been delivered.&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; source:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8696.php">http://www.open-mpi.org/community/lists/devel/2010/11/8696.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Case 2: 30 MPI ranks, message size is 1 byte
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; File: mpirun-np-30-Program-1.txt.gz
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1 byte is eager.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I agree.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Case 3: 2 MPI ranks, message size is 4096 bytes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; File: mpirun-np-2-Program-4096.txt
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Outcome: It hangs -- I killed the poor thing after 30 seconds or so.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Same as Case 1.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Case 4: 30 MPI ranks, message size if 4096 bytes, shared memory is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; disabled
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; File: mpirun-mca-btl-^sm-np-30-Program-4096.txt.gz
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Outcome: It runs just fine.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Eager limit for TCP is 65536 (perhaps less some overhead).  So, these 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; messages are eager.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I agree.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; M. S&#195;&#169;bastien Boisvert
</span><br>
<span class="quotelev2">&gt; &gt; &#195;&#137;tudiant au doctorat en physiologie-endocrinologie &#195;&#160; l'Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt; &gt; Boursier des Instituts de recherche en sant&#195;&#169; du Canada
</span><br>
<span class="quotelev2">&gt; &gt; &#195;&#137;quipe du Professeur Jacques Corbeil
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Centre de recherche en infectiologie de l'Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt; &gt; Local R-61B
</span><br>
<span class="quotelev2">&gt; &gt; 2705, boulevard Laurier
</span><br>
<span class="quotelev2">&gt; &gt; Qu&#195;&#169;bec, Qu&#195;&#169;bec
</span><br>
<span class="quotelev2">&gt; &gt; Canada G1V 4G2
</span><br>
<span class="quotelev2">&gt; &gt; T&#195;&#169;l&#195;&#169;phone: 418 525 4444 46342
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Courriel: SEB_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Web: <a href="http://boisvert.info">http://boisvert.info</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>&quot;Innovation comes only from an assault on the unknown&quot; -Sydney Brenner
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8721/MessagesHandler.cpp">MessagesHandler.cpp</a>
</ul>
<!-- attachment="MessagesHandler.cpp" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8721/MessagesHandler.h">MessagesHandler.h</a>
</ul>
<!-- attachment="MessagesHandler.h" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8722.php">Doron Shoham: "[OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Previous message:</strong> <a href="8720.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8710.php">George Bosilca: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8709.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
