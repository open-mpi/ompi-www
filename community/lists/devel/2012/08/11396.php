<?
$subject_val = "Re: [OMPI devel] 1.6.1rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 11:26:50 2012" -->
<!-- isoreceived="20120814152650" -->
<!-- sent="Tue, 14 Aug 2012 17:26:45 +0200" -->
<!-- isosent="20120814152645" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc1 posted" -->
<!-- id="502A6E35.5040501_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C45800-8363-4294-A433-D22B42F6A07F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc1 posted<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 11:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11397.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Hi All,
<br>
<p><p>On 08/07/12 18:51, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; So I'm not 100% clear on what you mean here: when you set the OFED params to
</span><br>
<span class="quotelev1">&gt; allow registration of more memory than you have physically,
</span><br>
<span class="quotelev1">&gt; does the problem go away?
</span><br>
<p>We are talking about machines with 24GB RAM (S) and 96GB RAM (L).
<br>
The default values for Mellanox/OFED parameter are 20/3 =&gt; 32GB registerable 
<br>
memory (RM) on both S and L. This is more than memory of S, but less than 2x 
<br>
memory of S, and less than memory of L.
<br>
<p>If the OFED parameter are pimped to at least RM=64GB (20/3 =&gt; 21/3, 22/3, 24/3) 
<br>
there are no errors, I've just tested it with 8GB respectively 15.5 GB of data 
<br>
(starting usually 1x ppn).
<br>
<p>If the OFED parameter are _not_ changed (=32GB RM) there is _no_ warning on S 
<br>
nodes; on L nodes this warns the user:
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
.......
<br>
&nbsp;&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;&nbsp;Total memory:            98293 MiB
<br>
--------------------------------------------------------------------------
<br>
.. hardly surprising - the warning came if and only if (RM &lt; memory).
<br>
<p><p>If the OFED parameter are _not_ changed (=32GB RM) and I'm trying to send at 
<br>
least 8GB _in one chunk_ then the 'queue pair' error came out (see S_log.txt and 
<br>
my last mail). More exactly at least one process seem to die in MPI_Finalize 
<br>
(all output of the program is correct). The same error came out also on L nodes, 
<br>
surrounded by the above warning (L_log.txt).
<br>
<p><p><p><p><p><span class="quotelev2">&gt;&gt; From your log messages, the warning messages were from machines with
</span><br>
<span class="quotelev2">&gt;&gt; nearly 100GB RAM but only 32GB register-able.  But only one of those was
</span><br>
<span class="quotelev2">&gt;&gt; the same as one that showed QP creation failures.
</span><br>
<span class="quotelev2"> &gt;&gt; So I'm not clear which was which.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless: can you pump the MTT params up to allow registering all
</span><br>
<span class="quotelev2">&gt;&gt; of physical memory on those machines, and see if you get any failures?
</span><br>
<p>as you can see on a node with 24GB memory and 32GB RM there can be a failure 
<br>
without any warning from Open MPI side :-(
<br>
<p><p><p><span class="quotelev1">&gt; To be clear: we're trying to determine if we should spend more effort
</span><br>
<span class="quotelev1">&gt; on making OMPI work properly in low-registered-memory-availabile
</span><br>
<span class="quotelev1">&gt; scenarios, or whether we should just emphasize
</span><br>
<span class="quotelev1">&gt; &quot;go reset your MTT parameters to allow registering all of physical memory.&quot;
</span><br>
<p>After making the experience with failures when only 1.5x of phys.mem. is allowed 
<br>
for registering I would follow Mellanox in &quot;go reset your MTT to allow _twice_ 
<br>
the phys.memory&quot;.
<br>
<p>So,
<br>
- if the OFED parameter are pimped everything is OK
<br>
- there is a [rare] combination when your great workaround did not catch.
<br>
- allowing 2x memory for being registered could be a good idea.
<br>
<p>Does this make sense?
<br>
<p>Best,
<br>
Paul Kapinos
<br>
<p>P.S. The used example program is of course an synthetical thing but it is 
<br>
strongly sympathized with the Serpent software. (however serpent usually use 
<br>
chunks whereby the actual error arise if all the 8GB are send in one piece).
<br>
<p>P.S.2 When all works, with increasing chunk size to HUGE values, the performance 
<br>
seem to became worse - sending all 15.5 GB in one piece is more than twice 
<br>
slower than sending with 200 mb pieces. See chunked_send.txt
<br>
(the first parameter is #doubles of data, the 2nd is #doubles in a chunk).
<br>
<p>P.S.3 all experiments above with 1.6.1rc2
<br>
<p>P.S.4. I'm also performing some linpack runs with 6x nodes and my very first 
<br>
impression is that increasing log_num_mtt to huge values is a bad idea 
<br>
(performance loss of some 5%). But let me finish it first...
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915



</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11396/chunked_send.txt">chunked_send.txt</a>
</ul>
<!-- attachment="chunked_send.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11396/S_log.txt">S_log.txt</a>
</ul>
<!-- attachment="S_log.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11396/L_log.txt">L_log.txt</a>
</ul>
<!-- attachment="L_log.txt" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11396/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11397.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11395.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>In reply to:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
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
