<?
$subject_val = "Re: [OMPI users] using MPI through Qt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 03:49:00 2011" -->
<!-- isoreceived="20110302084900" -->
<!-- sent="Wed, 2 Mar 2011 00:48:55 -0800" -->
<!-- isosent="20110302084855" -->
<!-- name="Eye RCS 51" -->
<!-- email="eye.rcs.51_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using MPI through Qt" -->
<!-- id="AANLkTik8HGNGHbQWMvu1te_6V2F6u24sDzcE6Pv1hCY9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinvuqyji1ZGo3202-W2D7MaD-gav38njJvt2PqM_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using MPI through Qt<br>
<strong>From:</strong> Eye RCS 51 (<em>eye.rcs.51_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-02 03:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Previous message:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15771.php">Eugene Loh: "Re: [OMPI users] using MPI through Qt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David / users,
<br>
<p>Thanks for your mail and suggestion.
<br>
Well, Can you please elaborate some more on this.
<br>
<p>When I start program, without doing anything, nodes other than master keep
<br>
waiting for the corresponding MPI_Bcast call and keep taking nearly 50% CPU
<br>
while idle. When I MPI_Bcast the variable from master, then only other nodes
<br>
come to normal state. This is really a problem but it is unavoidable.
<br>
<p>Also, is it possible for master to trigger a function/MPI call on all nodes
<br>
using any of MPI functionalities? This will be very useful.
<br>
<p>Thank you very much for your feedback.
<br>
<p><pre>
--
regards,
eye51
On Tue, Mar 1, 2011 at 8:05 AM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
&gt; Certainly you may call MPI functions many times, the problem is that you
&gt; need to have matching receives (or collectives) at your slave nodes, which
&gt; is only determined at run-time.  Perhaps this could be done with two
&gt; communications, the first broadcast the type of communications to the slaves
&gt; (for example, 1 for collective broadcast, 2 for scatter, etc.), you encode
&gt; whatever you wish in an integer.  Once the slaves receive the code they'll
&gt; respond correspondingly, posting the corresponding MPI receive.  Clearly, a
&gt; way to allow the slaves to exit the while loop is needed if you want the
&gt; slaves to exit cleanly, the exit code can also be encoded in the integer you
&gt; sent out.
&gt;
&gt; On Tue, Mar 1, 2011 at 12:39 AM, Eye RCS 51 &lt;eye.rcs.51_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; In an effort to make a Qt gui using MPI, I have the following:
&gt;&gt;
&gt;&gt; 1. Gui started in master node.
&gt;&gt;
&gt;&gt; 2. In Gui, through a pushbutton, a global variable x is assigned some
&gt;&gt; value; let say, x=1000;
&gt;&gt;
&gt;&gt; 3. I want this value to be know to all nodes. So I used broadcast in the
&gt;&gt; function assigning it on the master node and all other nodes.
&gt;&gt;
&gt;&gt; 4. I printed values of x, which prints all 1000 in all nodes.
&gt;&gt;
&gt;&gt; 5. Now control has reached to MPI_Finalize in all nodes except master.
&gt;&gt;
&gt;&gt; Now If I want to reassign value of x using pushbutton in master node and
&gt;&gt; again broadcast to and print in all nodes, can it be done??
&gt;&gt; I mean, can I have an MPI function which through GUI is called many times
&gt;&gt; and assigns and prints WHILE program is running.
&gt;&gt;
&gt;&gt; OR simply can I have a print function which is printing noderank value in
&gt;&gt; all nodes whenever pushbutton is pressed while program is running.
&gt;&gt;
&gt;&gt; command i used is &quot;mpirun -np 3 ./a.out&quot;.
&gt;&gt;
&gt;&gt; Any help will be appreciated.
&gt;&gt; Thanks you very much.
&gt;&gt;
&gt;&gt; --
&gt;&gt; eye51
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt;
&gt; --
&gt; David Zhang
&gt; University of California, San Diego
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15781.php">Gabriele Fatigati: "[OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>Previous message:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15769.php">David Zhang: "Re: [OMPI users] using MPI through Qt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15771.php">Eugene Loh: "Re: [OMPI users] using MPI through Qt"</a>
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
