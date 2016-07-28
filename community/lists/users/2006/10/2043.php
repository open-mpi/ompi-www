<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 24 10:28:41 2006" -->
<!-- isoreceived="20061024142841" -->
<!-- sent="Tue, 24 Oct 2006 10:28:29 -0400" -->
<!-- isosent="20061024142829" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual Gigabit ethernet support" -->
<!-- id="f869b68c0610240728n2598f496gf6b4acfcfd9ee2a1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01fe01c6f771$42e33730$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-24 10:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2044.php">Tony Ladd: "[OMPI users] Dual Gigabit Ethernet Support"</a>
<li><strong>Previous message:</strong> <a href="2042.php">Tony Ladd: "[OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2042.php">Tony Ladd: "[OMPI users] Dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very interesting, indeed! Message passing running over raw Ethernet using
<br>
cheap COTS PCs is indeed the need of the hours for people like me who has a
<br>
very shallow pocket. Great work! What would make this effort *really* cool
<br>
is to have a one-to-one mapping of APIs from MPI domain to GAMMA domain, so,
<br>
for example, existing MPI code can be ported with a trivial amount of work.
<br>
Professor Ladd, how did you do this porting, e.g. for VASP? How much of an
<br>
effort was it? (Or did the VASP guys already had a version running over
<br>
GAMMA ?)
<br>
<p>Thanks
<br>
Durga
<br>
<p><p>On 10/24/06, Tony Ladd &lt;ladd_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lisandro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use my own network testing program; I wrote it some time ago because
</span><br>
<span class="quotelev1">&gt; Netpipe only tested 1-way rates at that point. I havent tried IMB but I
</span><br>
<span class="quotelev1">&gt; looked at the source and its very similar to what I do. 1) set up buffers
</span><br>
<span class="quotelev1">&gt; with data. 2) Start clock 3) Call MPI_xxx N times 4) Stop clock 5)
</span><br>
<span class="quotelev1">&gt; calculate
</span><br>
<span class="quotelev1">&gt; rate. IMB tests more things than I do; I just focused on the calls I use
</span><br>
<span class="quotelev1">&gt; (send recv allreduce). I have done a lot of testing of hardware and
</span><br>
<span class="quotelev1">&gt; software. I will have some web pages posted soon. I will put a note here
</span><br>
<span class="quotelev1">&gt; when I do. But a couple of things.
</span><br>
<span class="quotelev1">&gt; A) I have found the switch is the biggest discriminant if you want to run
</span><br>
<span class="quotelev1">&gt; HPC under Gigabit ethernet. Most GigE switches choke when all the ports
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; being used at once. This is the usual HPC pattern, but not of a typical
</span><br>
<span class="quotelev1">&gt; network, which is what these switches are geared towards. The one
</span><br>
<span class="quotelev1">&gt; exception
</span><br>
<span class="quotelev1">&gt; I have found is the Extreme Networks x450a-48t. In some test patterns I
</span><br>
<span class="quotelev1">&gt; found it to be 500 times faster (not a typo) than the s400-48t, which is
</span><br>
<span class="quotelev1">&gt; its
</span><br>
<span class="quotelev1">&gt; predecessor. I have tested several GigE switches (Extreme, Force10, HP,
</span><br>
<span class="quotelev1">&gt; Asante) and the x450 is the only one that copes with high traffic loads in
</span><br>
<span class="quotelev1">&gt; all port configurations. Its expensive for a GigE switch (~$6500) but
</span><br>
<span class="quotelev1">&gt; worth
</span><br>
<span class="quotelev1">&gt; it in my opinion if you want to do HPC. Its still much cheaper than
</span><br>
<span class="quotelev1">&gt; Infiniband.
</span><br>
<span class="quotelev1">&gt; B) You have to test the switch in different port configurations-a random
</span><br>
<span class="quotelev1">&gt; ring of SendRecv is good for this. I don't think IMB has it in its test
</span><br>
<span class="quotelev1">&gt; suite but its easy to program. Or you can change the order of nodes in the
</span><br>
<span class="quotelev1">&gt; machinefile to force unfavorable port assignments. A step of 12 is a good
</span><br>
<span class="quotelev1">&gt; test since many GigE switches use 12-port ASICS and this forces all the
</span><br>
<span class="quotelev1">&gt; traffic onto the backplane. On the Summit 400 this causes it to more or
</span><br>
<span class="quotelev1">&gt; less
</span><br>
<span class="quotelev1">&gt; stop working-rates drop to a few Kbytes/sec along each wire, but the x450
</span><br>
<span class="quotelev1">&gt; has no problem with the same test. You need to know how your nodes are
</span><br>
<span class="quotelev1">&gt; wired
</span><br>
<span class="quotelev1">&gt; to the switch to do this test.
</span><br>
<span class="quotelev1">&gt; C) GAMMA is an extraordinary accomplishment in my view; in a number of
</span><br>
<span class="quotelev1">&gt; tests
</span><br>
<span class="quotelev1">&gt; with codes like DLPOLY, GROMACS, VASP it can be 2-3 times the speed of TCP
</span><br>
<span class="quotelev1">&gt; based programs with 64 cpus. In many instances I get comparable (and
</span><br>
<span class="quotelev1">&gt; occasionally better) scaling than with the university HPC system which has
</span><br>
<span class="quotelev1">&gt; an Infiniband interconnect. Note I am not saying GigE is comparable to IB;
</span><br>
<span class="quotelev1">&gt; but that a typical HPC setup with nodes scattered all over a fat tree
</span><br>
<span class="quotelev1">&gt; topology (including oversubscription of the links and switches) is enough
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; a minus that an optimized GigE set up can compete; at least up to 48 nodes
</span><br>
<span class="quotelev1">&gt; (96 cpus in our case). I have worked with Giuseppe Ciaccio for the past 9
</span><br>
<span class="quotelev1">&gt; months eradicating some obscure bugs in GAMMA. I find them; he fixes them.
</span><br>
<span class="quotelev1">&gt; We have GAMMA running on 48 nodes quite reliably but there are still many
</span><br>
<span class="quotelev1">&gt; issues to address. GAMMA is very much a research tool-there are a number
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; features(?) which would hinder it being used in an HPC environment.
</span><br>
<span class="quotelev1">&gt; Basically Giuseppe needs help with development. Any volunteers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; Tony Ladd
</span><br>
<span class="quotelev1">&gt; Professor, Chemical Engineering
</span><br>
<span class="quotelev1">&gt; University of Florida
</span><br>
<span class="quotelev1">&gt; PO Box 116005
</span><br>
<span class="quotelev1">&gt; Gainesville, FL 32611-6005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: 352-392-6509
</span><br>
<span class="quotelev1">&gt; FAX: 352-392-9513
</span><br>
<span class="quotelev1">&gt; Email: tladd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2044.php">Tony Ladd: "[OMPI users] Dual Gigabit Ethernet Support"</a>
<li><strong>Previous message:</strong> <a href="2042.php">Tony Ladd: "[OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2042.php">Tony Ladd: "[OMPI users] Dual Gigabit ethernet support"</a>
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
