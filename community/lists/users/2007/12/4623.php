<?
$subject_val = "Re: [OMPI users] Configure fails with icc 10.1.008";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 21:51:18 2007" -->
<!-- isoreceived="20071208025118" -->
<!-- sent="Fri, 07 Dec 2007 21:51:12 -0500" -->
<!-- isosent="20071208025112" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fails with icc 10.1.008" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B53072C2861_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47597153.3020406_at_neuralbs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure fails with icc 10.1.008<br>
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 21:51:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4624.php">David Gunter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4624.php">David Gunter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>I see you are using a gentoo distro like me. My version uses the vanilla
<br>
kernel 2.6.22.9 and gcc-4.1.2. I have the following intel compiler
<br>
versions installed:
<br>
<p>10.0.026  10.1.008  10.1.011  9.1.052
<br>
<p>None of them are able to build a functional version of openmpi-1.2.4.
<br>
I've been posting this problem to this list and also to the Intel
<br>
premier customer support. The actual problem is that after building
<br>
openmpi, I get:
<br>
<p>-&gt;ompi_info
<br>
Segmentation fault
<br>
<p>-&gt;mpic++ --showme
<br>
Segmentation fault
<br>
<p>The compilers do work outside openmpi. I can compile and run non-mpi
<br>
programs.
<br>
<p>Please post to this list whether you are able to compile and get a
<br>
working openmpi with gcc-4.1 series.
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Eric Thibodeau
&gt; Sent: Friday, December 07, 2007 11:14 AM
&gt; To: Jeff Squyres
&gt; Cc: Open MPI Users
&gt; Subject: Re: [OMPI users] Configure fails with icc 10.1.008
&gt; 
&gt; Jeff,
&gt; 
&gt;     Thanks...at 23h30 coffee is far off... I saw the proper section of
&gt; the config.log showing exactly that (hello world not working). For
&gt; everyone else's benefit, ICC (up to 10.1.008) is _not_ compatible with
&gt; GCC 4.2... (guess I'll have to retro back to 4.1 series...)
&gt; 
&gt; Eric
&gt; 
&gt; Jeff Squyres wrote:
&gt; &gt; This is not an Open MPI problem; Open MPI is simply reporting that
&gt; &gt; your C++ compiler is not working.  OMPI tests a trivial C++ program
&gt; &gt; that uses the STL to ensure that your C++ program is working.  It's
&gt; &gt; essentially:
&gt; &gt;
&gt; &gt; #include &lt;string&gt;
&gt; &gt; int
&gt; &gt; main ()
&gt; &gt; {
&gt; &gt; std::string foo = &quot;Hello, world&quot;
&gt; &gt;   ;
&gt; &gt;   return 0;
&gt; &gt; }
&gt; &gt;
&gt; &gt; You should probably check with Intel support for more details.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Dec 6, 2007, at 11:25 PM, Eric Thibodeau wrote:
&gt; &gt;
&gt; &gt;&gt; Hello all,
&gt; &gt;&gt;
&gt; &gt;&gt;   I am unable to get past ./configure as ICC fails on C++ tests
(see
&gt; &gt;&gt; attached ompi-output.tar.gz). Configure was called without and the
&gt; &gt;&gt; with sourcing `/opt/intel/cc/10.1.xxx/bin/iccvars.sh`  as per one
of
&gt; &gt;&gt; the invocation options in icc's doc. I was unable to find the
&gt; &gt;&gt; relevant (well..intelligible for me that is ;P ) cause of the
failure
&gt; &gt;&gt; in config.log. Any help would be appreciated.
&gt; &gt;&gt;
&gt; &gt;&gt; Thanks,
&gt; &gt;&gt;
&gt; &gt;&gt; Eric Thibodeau
&gt; &gt;&gt; &lt;ompi-output.tar.gz&gt;_______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4624.php">David Gunter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4622.php">Eric Thibodeau: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4624.php">David Gunter: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
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
