<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 11:02:25 2007" -->
<!-- isoreceived="20070716150225" -->
<!-- sent="Mon, 16 Jul 2007 08:02:21 -0700 (PDT)" -->
<!-- isosent="20070716150221" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs on remote nodes -- how to find where and why?" -->
<!-- id="574595.27728.qm_at_web57601.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 11:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3681.php">Brian Barrett: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>I'm trying to use Open MPI 1.2.3 on a cluster of dual-processor AMD64
<br>
nodes.  These nodes are all connected via gigabit ethernet on a
<br>
private, self-contained IP network.  The OS is GNU/Linux, gcc 4.1.2,
<br>
kernel 2.6.21 .  Open MPI was configured with --prefix=/usr/local and
<br>
installed via make install.  Compilation and installation went
<br>
successfully.  I have verified that non-interactive logins contain
<br>
/usr/local/bin in the PATH, and ld.so.conf has an entry for the Open
<br>
MPI lib dir (and ld.so.cache is up-to-date).  This is a more-or-less
<br>
&quot;vanilla&quot; installation without any external schedulers/resource
<br>
managers.
<br>
<p>I am simply trying to test Open MPI for the first time (we previously
<br>
used LAM), and trying to do so via trivial system executables like
<br>
&quot;env&quot;.
<br>
<p>The problem is this: if I invoke mpirun such that it needs to launch on
<br>
nodes other than the one I'm invoking it on, it seems to launch and
<br>
then hang. Ctrl+C yields a &quot;mpirun: killing job...&quot; message, but the
<br>
job never dies.  I have to suspend the job and use kill -9, otherwise
<br>
it doesn't die. 
<br>
<p>If I invoke on the host I'm logged into (any node in the hostfile),
<br>
without any host specification or hostfile provision, it works fine
<br>
(i.e. job is run on local machine).  My mpirun hostfile contains
<br>
entries like:
<br>
<p>node1.x86-64 slots=2 max_slots=2
<br>
<p>so for example, if I do:
<br>
<p>headnode $ mpirun -hostfile runnodes.txt -np 1 env
<br>
<p>where runnodes.txt does not contain any entry for the headnode, then
<br>
mpirun hangs as I described.  I have verified that I can do:
<br>
<p>headnode $ ssh node1.x86-64 env
<br>
<p>which works fine.
<br>
<p>Even using mpirun -v, I can't seem to find a command-line option which
<br>
would give me the diagnostic information to figure out where mpirun
<br>
gets stuck, what it has done up to that point, etc.  How can I figure
<br>
out what's going wrong?  Is there a way to verbosely report the actions
<br>
taken so far?
<br>
<p>These machines have multiple onboard ethernet interfaces with only one
<br>
configured to communicate with the cluster, but even using the &quot;--mca
<br>
btl_tcp_if_include eth1&quot; argument to mpirun makes no difference.
<br>
<p>The only potential thing I could come up with is as follows.  All name
<br>
resolution is done via /etc/hosts and no DNS server is present. 
<br>
However, the cluster actually contains machines of 2 different
<br>
architectures, and we wanted nodes to be named node&lt;#&gt;.&lt;arch&gt; where #
<br>
goes from 1 to N, and example archs would be x86-64 or alpha .  To make
<br>
this work, the init scripts on the machines set the hostname to the
<br>
fully-qualified node name, e.g. node1.x86-64.cluster , rather than the
<br>
typical practice of just the name preceding the first dot.  In
<br>
/etc/resolv.conf, the &quot;domain&quot; keyword is set to &lt;arch&gt;.&lt;TLD&gt;, e.g.
<br>
x86-64.cluster .  All the /etc/hosts entries do contain the node names
<br>
in the format of node&lt;#&gt;.&lt;arch&gt; as well as the fully-qualified
<br>
versions.  So, other than setting the hostname to the fully-qualified
<br>
value, this is a fairly typical GNU/Linux setup.
<br>
<p>We used the same practice with LAM and it never posed a problem, but
<br>
thought I'd mention it in just in case.
<br>
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Now that's room service!  Choose from over 150,000 hotels
<br>
in 45,000 destinations on Yahoo! Travel to find your fit.
<br>
<a href="http://farechase.yahoo.com/promo-generic-14795097">http://farechase.yahoo.com/promo-generic-14795097</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3681.php">Brian Barrett: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
