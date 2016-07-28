<?
$subject_val = "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 12:58:00 2009" -->
<!-- isoreceived="20090416165800" -->
<!-- sent="Thu, 16 Apr 2009 18:57:55 +0200" -->
<!-- isosent="20090416165755" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel compiler libraries (was: libnuma issue)" -->
<!-- id="b87c422a0904160957n4894581cu6fe4611a2ae4cf89_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D56E3FA3-ABFC-4159-9320-ED0160A1202D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intel compiler libraries (was: libnuma issue)<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 12:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8960.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 16, 2009 at 5:37 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 11:29 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; francesco_at_tya64:~$ ssh 192.168.1.33 env | sort
</span><br>
<span class="quotelev2">&gt;&gt; HOME=/home/francesco
</span><br>
<span class="quotelev2">&gt;&gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev2">&gt;&gt; LOGNAME=francesco
</span><br>
<span class="quotelev2">&gt;&gt; MAIL=/var/mail/francesco
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/games
</span><br>
<span class="quotelev2">&gt;&gt; PWD=/home/francesco
</span><br>
<span class="quotelev2">&gt;&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; SHLVL=1
</span><br>
<span class="quotelev2">&gt;&gt; SSH_CLIENT=192.168.1.37 33941 22
</span><br>
<span class="quotelev2">&gt;&gt; SSH_CONNECTION=192.168.1.37 33941 192.168.1.33 22
</span><br>
<span class="quotelev2">&gt;&gt; USER=francesco
</span><br>
<span class="quotelev2">&gt;&gt; _=/usr/bin/env
</span><br>
<span class="quotelev2">&gt;&gt; francesco_at_tya64:~$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see the intel compiler variables set in there, nor an
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH indicating where the intel libraries are located. &#194;&#160;See my
</span><br>
<span class="quotelev1">&gt; text from the last mail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm guessing that you're not sourcing the intel .sh files for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; non-interactive logins. &#194;&#160;You'll need to check your shell startup files
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ensure that those sourcing lines are executed when you login to remote
</span><br>
<span class="quotelev3">&gt;&gt; &gt; nodes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; non-interactively. &#194;&#160;E.g.:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160;thisnode$ ssh othernode env | sort
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; shows the relevant stuff in your environment on the other node. &#194;&#160;Note
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this is different than
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160;thisnode$ ssh othernode
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160;othernode$ env | sort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might well have some logic in your .bashrc that quits before fully
</span><br>
<span class="quotelev1">&gt; executing when running non-interactive logins; hence, the &quot;.
</span><br>
<span class="quotelev1">&gt; /opt/intel/fce/10.1.022/bin/ifortvars.sh&quot; lines don't execute on the
</span><br>
<span class="quotelev1">&gt; 192.168.1.33 machine when you run non-interactive jobs.
</span><br>
<p>That is true, horrendously true. While the other parallel machine to
<br>
which I can slogin passwordless responds correctly to &quot;env | sort&quot;
<br>
from its keyboard, it does not so when &quot;thisnode$ ssh othernode env |
<br>
sort&quot; from another computer. The answer is the same as from the
<br>
non-parallel desktop. I can't say if &quot;thisnode$ ssh othernode env |
<br>
sort&quot; worked well before, or if it is relevant as to the way I intend
<br>
to use these computers singly. At any event, I would like to fix the
<br>
connection. Is that described in howto setting up ssh?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8960.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8958.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
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
