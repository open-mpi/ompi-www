<?
$subject_val = "Re: [OMPI users] Problem with setting up openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 19:58:21 2011" -->
<!-- isoreceived="20110412235821" -->
<!-- sent="Tue, 12 Apr 2011 19:58:12 -0400" -->
<!-- isosent="20110412235812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with setting up openmpi-1.4.3" -->
<!-- id="66848190-8144-4415-81DE-E5446BE3613B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTim0a1DAtRtyX=oUze7J3rzka2N_4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with setting up openmpi-1.4.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 19:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16208.php">amosleff_at_[hidden]: "[OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16208.php">amosleff_at_[hidden]: "[OMPI users] Problem with setting up openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16215.php">Eugene Loh: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you have a broken C++ compiler installation.  The code that is failing to compile is a system-level C++ header file, not an Open MPI file.
<br>
<p>The only part of Open MPI that is C++ is the optional VampirTrace package; you can disable building it and the rest of Open MPI will work fine.  Use &quot;./configure --enable-contrib-no-build=vt ...&quot; when configuring Open MPI and that will disable building VT.
<br>
<p>You can check the web archives of the users list for any mail that was sent across the list.  Your mail, for example, was <a href="http://www.open-mpi.org/community/lists/users/2011/04/16208.php">http://www.open-mpi.org/community/lists/users/2011/04/16208.php</a>.
<br>
<p><p>On Apr 12, 2011, at 7:17 PM, amosleff_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;          I am embarrassed!  I submitted a note to the users on setting up openmpi-1.4.3 using SUSE-11.3 under Linux and received several replies.  I wanted to transfer them but they disappeared for no apparent reason.   I hope that those that sent me messages will be kind enough to repeat them and perhaps more users will add their ideas.
</span><br>
<span class="quotelev1">&gt;          I am running SUSE-11.3 under VMware-7.1 and downloaded the openmpi program.  The &quot;configuration...&quot; step went fine but the &quot;make all install&quot; step hung up as shown below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpragma_c.Tpo -c -o ompragma_c.o ompragma_c.cc
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(64): error: expected an expression
</span><br>
<span class="quotelev1">&gt;     { return {  __mask }; }
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(94): error: expected an expression
</span><br>
<span class="quotelev1">&gt;     { return { __mask }; }
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(125): error: expected an expression
</span><br>
<span class="quotelev1">&gt;     { return { __base }; }
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(193): error: expected an expression
</span><br>
<span class="quotelev1">&gt;     { return { __n }; }
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(223): error: expected an expression
</span><br>
<span class="quotelev1">&gt;     { return { __n }; }
</span><br>
<span class="quotelev1">&gt;              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.5/iomanip(163): error: expected an expression
</span><br>
<span class="quotelev1">&gt;       { return { __c }; }
</span><br>
<span class="quotelev1">&gt;                ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for ompragma_c.cc (code 2)
</span><br>
<span class="quotelev1">&gt; make[7]: *** [ompragma_c.o] Error 2
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have looked at the program but don't see anything obviously wrong.  Hopefully somebody who is familiar with the program will see what the problem is.  Any help would be much appreciated.
</span><br>
<span class="quotelev1">&gt;                                                                                          Amos Leffler
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Previous message:</strong> <a href="16208.php">amosleff_at_[hidden]: "[OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16208.php">amosleff_at_[hidden]: "[OMPI users] Problem with setting up openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16215.php">Eugene Loh: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
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
