<?
$subject_val = "Re: [OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 09:07:57 2016" -->
<!-- isoreceived="20160514130757" -->
<!-- sent="Sat, 14 May 2016 22:07:56 +0900" -->
<!-- isosent="20160514130756" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building vs packaging" -->
<!-- id="CAAkFZ5tfMThQ1nQEDLKwPCQRTE4Uy2ZpNByVGLw8ep2AsUvz-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="01c801d1add4$fd059ad0$f710d070$_at_getiton.myzen.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building vs packaging<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 09:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29203.php">Andrew Reid: "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Previous message:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<li><strong>In reply to:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>I do not know how Debian packaged openmpi, and they should be asked instead
<br>
of openmpi.
<br>
<p>an other option to get things work is to add the path to openmpi libraries
<br>
in the ld conf.
<br>
for example, append
<br>
/opt/openmpi/lib
<br>
to /etc/ld.so.conf
<br>
(or into a new file called /etc/ld.so.conf.d/openmpi, that works at least
<br>
on redhat)
<br>
and run
<br>
ldconfig
<br>
<p>that works for all users, but should be used if there is only one openmpi
<br>
version available on the system.
<br>
as far as I am concerned, configure with --enable-mpirun-prefix-by-default
<br>
is a much better option.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, May 14, 2016, Rob Malpass &lt;lug_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I posted about a fortnight ago to this list as I was having some trouble
</span><br>
<span class="quotelev1">&gt; getting my nodes to be controlled by my master node.   Perceived wisdom at
</span><br>
<span class="quotelev1">&gt; the time was to compile with the &#226;&#128;&#147;enable-orterun-prefix-by-default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some time I&#226;&#128;&#153;d been getting cannot open libopen-rte.so.7 which points
</span><br>
<span class="quotelev1">&gt; to a problem with LD_LIBRARY_PATH.   I had been able to run it on nodes 3
</span><br>
<span class="quotelev1">&gt; and 4 even though (from headnode) if I do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh node4 &#226;&#128;&#152;echo $LD_LIBRARY_PATH&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; returns a blank line.   However &#226;&#128;&#147; as I say it&#226;&#128;&#153;s working on nodes 3 and 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had been hacking for ages on nodes 1 and 2 getting the same error but
</span><br>
<span class="quotelev1">&gt; still with LD_LIBRARY_PATH apparently not set for an interactive login.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Almost in desperation, I cheated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo  apt-get install openmpi-bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and hey presto.   I can now do (from head node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun &#226;&#128;&#147;H node2,node3,node4 &#226;&#128;&#147;n 10 foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it works fine.   So clearly apt-get install has set something that I&#226;&#128;&#153;d
</span><br>
<span class="quotelev1">&gt; not done (and it&#226;&#128;&#153;s seemingly not LD_LIBRARY_PATH) as ssh node2 &#226;&#128;&#152;echo
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH&#226;&#128;&#153; still returns a blank line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone tell me what might be in the install script so I can get a clue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29203.php">Andrew Reid: "[OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>Previous message:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<li><strong>In reply to:</strong> <a href="29201.php">Rob Malpass: "[OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
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
