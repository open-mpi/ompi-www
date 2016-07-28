<?
$subject_val = "Re: [OMPI users] Question - OTF file";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 13:21:14 2010" -->
<!-- isoreceived="20100325172114" -->
<!-- sent="Thu, 25 Mar 2010 18:21:04 +0100" -->
<!-- isosent="20100325172104" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question - OTF file" -->
<!-- id="201003251821.08118.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.13.1269532803.22439.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question - OTF file<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 13:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<li><strong>Previous message:</strong> <a href="12437.php">Robert Collyer: "[OMPI users] Trouble executing remote processes"</a>
<li><strong>Maybe in reply to:</strong> <a href="12424.php">Artur Trojanowski: "[OMPI users] Question - OTF file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Arthur, hi all,
<br>
<p>I guess you've got most of the thing and we'll find out the last bit, too. 
<br>
Would you please let me know which version of Vampir you've got.
<br>
<p>What does 'ls -alh' look like in the PWD? And please give it a try with some 
<br>
of the included OTF tools, e.g. one of the following
<br>
<p>%&gt; otfinfo a.otf
<br>
%&gt; otfdump a.otf
<br>
%&gt; otfmerge -o b.otf -p a.otf
<br>
%&gt; otfprofile a.otf
<br>
<p>What do they say?
<br>
<p>Finally, if it is no super secret rocket science, put all the 'a.*' files 
<br>
somewhere on an http or ftp URL where I could download them.
<br>
<p>Viele Gr&#252;&#223;e, Andreas
<br>
<p>On Thursday 25 March 2010 17:00:03 users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Thu, 25 Mar 2010 09:16:21 +0100
</span><br>
<span class="quotelev1">&gt; From: Artur Trojanowski &lt;trojan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Question - OTF file
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4BAB1BD5.7000502_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; My name is Arthur Trojanowski I just tested Vampir software.
</span><br>
<span class="quotelev1">&gt; I have installed the MPI version 1.4
</span><br>
<span class="quotelev1">&gt; I would like to know how to generate the correct OTF file in VampirTrace
</span><br>
<span class="quotelev1">&gt; I have written a small C program with support for MPI
</span><br>
<span class="quotelev1">&gt; To compile the program I use the command:
</span><br>
<span class="quotelev1">&gt; mpicc-vt -vt:inst gnu -vt:verbose -o new.out new.c
</span><br>
<span class="quotelev1">&gt; Generates a file new.out. When I start it up:
</span><br>
<span class="quotelev1">&gt; mpiexec -np 6 new.out
</span><br>
<span class="quotelev1">&gt; creates a small OTF file a.otf and several files a.0.def.z, 
</span><br>
<span class="quotelev1">&gt; a.1.events.z, a.2.events.z etc.
</span><br>
<span class="quotelev1">&gt; Vampir will not open this OTF file
</span><br>
<span class="quotelev1">&gt; Can you tell me what I am doing wrong.
</span><br>
<span class="quotelev1">&gt; If you need any additional information about this error, please contact 
</span><br>
<span class="quotelev1">&gt; with me
</span><br>
<span class="quotelev1">&gt; Greets
</span><br>
<span class="quotelev1">&gt; Arthur
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dr. rer. nat. Andreas Kn&#252;pfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12438/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<li><strong>Previous message:</strong> <a href="12437.php">Robert Collyer: "[OMPI users] Trouble executing remote processes"</a>
<li><strong>Maybe in reply to:</strong> <a href="12424.php">Artur Trojanowski: "[OMPI users] Question - OTF file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
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
