<?
$subject_val = "Re: [OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 10:46:24 2016" -->
<!-- isoreceived="20160516144624" -->
<!-- sent="Mon, 16 May 2016 14:46:12 +0000" -->
<!-- isosent="20160516144612" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building vs packaging" -->
<!-- id="4501904A-5554-4FCB-A0AA-98AC95A2E6B2_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="c0e88dab-1bed-941c-7fee-21891d820366_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 10:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29210.php">Zabiziz Zaz: "[OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 to everything so far.
<br>
<p>Also, look in your shell startup files (e.g., $HOME/.bashrc) to see if certain parts of it are not executed for non-interactive logins.  A common mistake we see is a shell startup file like this:
<br>
<p><pre>
----
# ... do setup for all logins ...
if (this is a non-interactive login) exit 0
# ... do setup for interactive logins, including Open MPI setup ...
----
&gt; On May 16, 2016, at 10:34 AM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
&gt; 
&gt; Hey Rob,
&gt; 
&gt; I don't know if this is what is going on, but in general, when a package is installed via a distro's package management system, it ends up in system locations such as /usr/bin and /usr/lib that are automatically searched when looking for executables and libraries. So, it isn't necessarily that the package maintainers did much of anything different when putting together the package; instead, they may have put files in locations that are more accessible from a system-tool point of view. For example, the runtime linker knows to search in several system-defined directories such as /usr/lib. This might explain why everything worked after installing openmpi-bin: the binaries and libraries all ended up in system locations that are automatically a part of the environment on the remote node, so remote execution worked as it could find everything.
&gt; 
&gt; Thanks,
&gt; 
&gt; David
&gt; 
&gt; 
&gt; On 05/14/2016 05:37 AM, Rob Malpass wrote:
&gt;&gt; Hi all
&gt;&gt;  
&gt;&gt; I posted about a fortnight ago to this list as I was having some trouble getting my nodes to be controlled by my master node.   Perceived wisdom at the time was to compile with the &#150;enable-orterun-prefix-by-default.
&gt;&gt;  
&gt;&gt; For some time I&#146;d been getting cannot open libopen-rte.so.7 which points to a problem with LD_LIBRARY_PATH.   I had been able to run it on nodes 3 and 4 even though (from headnode) if I do
&gt;&gt;  
&gt;&gt; ssh node4 &#145;echo $LD_LIBRARY_PATH&#146;
&gt;&gt;  
&gt;&gt; returns a blank line.   However &#150; as I say it&#146;s working on nodes 3 and 4.
&gt;&gt;  
&gt;&gt; I had been hacking for ages on nodes 1 and 2 getting the same error but still with LD_LIBRARY_PATH apparently not set for an interactive login.
&gt;&gt;  
&gt;&gt; Almost in desperation, I cheated:
&gt;&gt;  
&gt;&gt; sudo  apt-get install openmpi-bin
&gt;&gt;  
&gt;&gt; and hey presto.   I can now do (from head node)
&gt;&gt;  
&gt;&gt; mpirun &#150;H node2,node3,node4 &#150;n 10 foo
&gt;&gt;  
&gt;&gt; and it works fine.   So clearly apt-get install has set something that I&#146;d not done (and it&#146;s seemingly not LD_LIBRARY_PATH) as ssh node2 &#145;echo $LD_LIBRARY_PATH&#146; still returns a blank line.
&gt;&gt;  
&gt;&gt; Can anyone tell me what might be in the install script so I can get a clue?
&gt;&gt;  
&gt;&gt; Thanks
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; 
&gt;&gt; users_at_[hidden]
&gt;&gt; 
&gt;&gt; Subscription: 
&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; Link to this post: 
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29201.php">http://www.open-mpi.org/community/lists/users/2016/05/29201.php</a>
&gt; 
&gt; -- 
&gt; David Shrader
&gt; HPC-ENV High Performance Computer Systems
&gt; Los Alamos National Lab
&gt; Email: dshrader &lt;at&gt; 
&gt; lanl.gov
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29209.php">http://www.open-mpi.org/community/lists/users/2016/05/29209.php</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29210.php">Zabiziz Zaz: "[OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
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
